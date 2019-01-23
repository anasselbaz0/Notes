<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Notes Controller
 *
 * @property \App\Model\Table\NotesTable $Notes
 *
 * @method \App\Model\Entity\Note[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NotesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Elements', 'Etudiers']
        ];
        $notes = $this->paginate($this->Notes);

        $this->set(compact('notes'));
    }

    /**
     * View method
     *
     * @param string|null $id Note id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $note = $this->Notes->get($id, [
            'contain' => ['Elements', 'Etudiers', 'Pvupdate']
        ]);

        $this->set('note', $note);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $note = $this->Notes->newEntity();
        if ($this->request->is('post')) {
            $note = $this->Notes->patchEntity($note, $this->request->getData());
            if ($this->Notes->save($note)) {
                $this->Flash->success(__('The note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The note could not be saved. Please, try again.'));
        }
        $elements = $this->Notes->Elements->find('list', ['limit' => 200]);
        $etudiers = $this->Notes->Etudiers->find('list', ['limit' => 200]);
        $this->set(compact('note', 'elements', 'etudiers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Note id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $note = $this->Notes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $note = $this->Notes->patchEntity($note, $this->request->getData());
            if ($this->Notes->save($note)) {
                $this->Flash->success(__('The note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The note could not be saved. Please, try again.'));
        }
        $elements = $this->Notes->Elements->find('list', ['limit' => 200]);
        $etudiers = $this->Notes->Etudiers->find('list', ['limit' => 200]);
        $this->set(compact('note', 'elements', 'etudiers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Note id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $note = $this->Notes->get($id);
        if ($this->Notes->delete($note)) {
            $this->Flash->success(__('The note has been deleted.'));
        } else {
            $this->Flash->error(__('The note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function preparationAffichage()
    {
        //filieres
        $this->loadModel('Filieres');
        $all_filieres = $this->Filieres->find();
        $filieres_labels = array();
        foreach ($all_filieres as $f) { $filieres_labels[] = $f->libile; }
        //niveaux
        $this->loadModel('Niveaus');
        $all_niveaux = $this->Niveaus->find();
        $niveaux_labels = array();
        foreach ($all_niveaux as $n) { $niveaux_labels[] = $n->libile; }
        //semestres
        $this->loadModel('Semestres');
        $all_semestres = $this->Semestres->find();
        $semestres_labels = array();
        foreach ($all_semestres as $s) { $semestres_labels[] = $s->libile; }
        //modules
        $this->loadModel('Modules');
        $all_modules = $this->Modules->find();
        $modules_labels = array();
        foreach ($all_modules as $m) { $modules_labels[] = $m->libile; }
        $this->loadModel('Elements');
        $all_elements = $this->Elements->find();
        $elements_labels = array();
        foreach ($all_elements as $e) { $elements_labels[] = $e->libile; }
        //passer les arguments
        $this->set(compact('filieres_labels',
                            'niveaux_labels',
                            'semestres_labels',
                            'modules_labels',
                            'elements_labels'));
    }

    public function affichage()
    {
        debug($this->request->data);
    }

}
