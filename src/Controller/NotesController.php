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
        $this->loadModel('Filieres');
        $all_filieres = $this->Filieres->find();
        foreach ($all_filieres as $f) { $filieres_labels[] = $f->libile; }
        $etape = 0;
        $this->set(compact('filieres_labels', 'etape'));
        if($this->request->is('post')){
            if(isset($this->request->data['filiere'])){
                $f = $this->request->data['filiere'];
                $all_filieres_not_array = $this->Filieres->find();
                $all_filieres = array();
                foreach ($all_filieres_not_array as $a) { $all_filieres[] = $a; }
                $filiere = $all_filieres[$f];
                $f = $filiere->id;
                $this->loadModel('Niveaus');
                $all_niveaux = $this->Niveaus->find();
                foreach ($all_niveaux as $n) { $niveaux_labels[] = $n->libile; }
                $etape = 1;
                $this->set(compact('filieres_labels', 
                                    'niveaux_labels', 
                                    'f', 
                                    'etape'));
            }
            if(isset($this->request->data['niveau'])){
                $n = $this->request->data['niveau'];
                $f = $this->request->data['f'];
                $this->loadModel('Niveaus');
                $all_niveaux_not_array = $this->Niveaus->find();
                $all_niveaux = array();
                foreach ($all_niveaux_not_array as $a) { $all_niveaux[] = $a;  $niveaux_labels[] = $a->libile; }
                $niveau = $all_niveaux[$n];
                $n = $niveau->id;
                $this->loadModel('Semestres');
                $all_semestres = $this->Semestres->find();
                foreach ($all_semestres as $s) { if($s->niveaus_id == $n) $semestres_labels[] = $s->libile; }
                $etape = 2;
                $this->set(compact('filieres_labels', 
                                    'niveaux_labels', 
                                    'semestres_labels', 
                                    'f', 'n', 
                                    'etape'));
            }
            if(isset($this->request->data['semestre'])){
                $f = $this->request->data['f'];
                $n = $this->request->data['n'];
                $this->loadModel('Semestres');
                $all_semestres = $this->Semestres->find();
                foreach ($all_semestres as $s) {
                    if($s->niveaus_id == $n) {
                        $semestres[] = $s;
                        $semestres_labels[] = $s->libile; 
                    }
                }
                $semestre = $semestres[$this->request->data['semestre']];
                $s = $semestre->id;
                $this->loadModel('Niveaus');
                $all_niveaux = $this->Niveaus->find();
                foreach ($all_niveaux as $a) { $niveaux_labels[] = $a->libile; }
                $this->loadModel('Groupes');
                $all_groupes = $this->Groupes->find();
                foreach ($all_groupes as $a) {
                    if($a->niveaus_id==$n && $a->filiere_id==$f){
                        $groupes_ids[] = $a->id;
                    }
                }
                $this->loadModel('Modules');
                $all_modules = $this->Modules->find();
                foreach ($all_modules as $a) {
                    if(in_array($a->groupe_id, $groupes_ids) && $a->semestre_id==$s){
                        $modules_labels[] = $a->libile;
                    }
                }
                $etape = 3;
                $this->set(compact('filieres_labels',
                            'niveaux_labels',
                            'semestres_labels',
                            'modules_labels',
                            'f','n','s',
                            'etape'));
            }
            if(isset($this->request->data['module'])){
                $n = $this->request->data['n'];
                $s = $this->request->data['s'];
                $f = $this->request->data['f'];
                $etape = 4;
                $this->loadModel('Groupes');
                $all_groupes = $this->Groupes->find();
                foreach ($all_groupes as $a) {
                    if($a->niveaus_id==$n && $a->filiere_id==$f){
                        $groupes_ids[] = $a->id;
                    }
                }
                $this->loadModel('Modules');
                $all_modules = $this->Modules->find();
                foreach ($all_modules as $a) {
                    if(in_array($a->groupe_id, $groupes_ids) && $a->semestre_id==$s){
                        $modules[] = $a;
                        $modules_labels[] = $a->libile;
                    }
                }
                $module = $modules[$this->request->data['module']];
                $m = $module->id;
                $this->loadModel('Elements');
                $all_elements = $this->Elements->find();
                foreach ($all_elements as $a) { if($a->module_id==$m) $elements_labels[] = $a->libile; }
                $this->loadModel('Niveaus');
                $all_niveaux = $this->Niveaus->find();
                foreach ($all_niveaux as $a) { $niveaux_labels[] = $a->libile; }
                $this->loadModel('Semestres');
                $all_semestres = $this->Semestres->find();
                foreach ($all_semestres as $s) { if($s->niveaus_id == $n) $semestres_labels[] = $s->libile; }
                $s = $this->request->data['s'];
                $this->set(compact('filieres_labels',
                            'niveaux_labels',
                            'semestres_labels',
                            'modules_labels',
                            'elements_labels',
                            'f','n','s','m',
                            'etape'));
            }
            if(isset($this->request->data['element'])){
                $etape = 5;
                $n = $this->request->data['n'];
                $s = $this->request->data['s'];
                $f = $this->request->data['f'];
                $m = $this->request->data['m'];
                $this->loadModel('Elements');
                $this->loadModel('Modules');
                $this->loadModel('Semestres');
                $this->loadModel('Niveaus');
                $this->loadModel('Filieres');
                $modules = $this->Modules->find();
                $semestres = $this->Semestres->find();
                $niveaux = $this->Niveaus->find();
                $filieres = $this->Filieres->find();
                $all_elements = $this->Elements->find();
                foreach ($modules as $a) { if($a->id == $m) $m_l = $a->libile; }
                foreach ($semestres as $a) { if($a->id == $s) $s_l = $a->libile; }
                foreach ($niveaux as $a) { if($a->id == $n) $n_l = $a->libile; }
                foreach ($filieres as $a) { if($a->id == $f) $f_l = $a->libile; }
                foreach ($all_elements as $a) {
                    if($a->module_id==$m){ 
                        $elements_labels[] = $a->libile;
                        $es[] = $a; 
                    }
                }
                $element = $es[$this->request->data['element']];
                $e = $element->id;
                $e_l = $element->libile;
                $this->set(compact('f_l',
                                    'n_l',
                                    's_l',
                                    'm_l',
                                    'e_l',
                                    'f','n','s','m','e',
                                    'etape'));
            }
        }
    }

    public function affichage()
    {
        if ($this->request->is('post')) {
            $e = $this->request->data['e'];
            $m = $this->request->data['m'];
            $notes = $this->Notes->find();
            $my_notes = array();
            foreach ($notes as $a) {                
                if ($a->element_id == $e) {
                    $my_notes[] = $a;
                }
            }
            $this->loadModel('Modules');
            $this->loadModel('Elements');
            $this->loadModel('Etudiers');
            $this->loadModel('Etudiants');
            $all_etudiants = $this->Etudiants->find();
            $all_etudiers = $this->Etudiers->find();
            $all_modules = $this->Modules->find();
            $all_elements = $this->Elements->find();
            foreach ($all_modules as $a) {
                if($a->id == $m){
                    $module = $a;
                    break;
                }
            }
            foreach ($all_elements as $a) {
                if($a->id == $e){
                    $element = $a;
                    break;
                }
            }
            foreach ($all_etudiers as $a) {
                if($a->element_id == $e){
                    $my_etudiers[] = $a;
                }
            }
            foreach ($my_etudiers as $a) {
                $etudiants_ids[] = $a->etudiant_id;
            }
            foreach ($all_etudiants as $a) {
                if(in_array($a->id, $etudiants_ids)){
                    $my_etudiants[] = $a;
                }
            }
            $this->set(compact('my_notes',
                                'element', 
                                'module',
                                'my_etudiants'));
        } else {
            $this->redirect(['action' => 'preparationAffichage']);
        }
    }

}
