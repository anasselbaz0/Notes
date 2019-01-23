<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Filieres Controller
 *
 * @property \App\Model\Table\FilieresTable $Filieres
 *
 * @method \App\Model\Entity\Filiere[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilieresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $filieres = $this->paginate($this->Filieres);

        $this->set(compact('filieres'));
    }

    /**
     * View method
     *
     * @param string|null $id Filiere id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filiere = $this->Filieres->get($id, [
            'contain' => ['Concours', 'Groupes']
        ]);

        $this->set('filiere', $filiere);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $filiere = $this->Filieres->newEntity();
        if ($this->request->is('post')) {
            $filiere = $this->Filieres->patchEntity($filiere, $this->request->getData());
            if ($this->Filieres->save($filiere)) {
                $this->Flash->success(__('The filiere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The filiere could not be saved. Please, try again.'));
        }
        $this->set(compact('filiere'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Filiere id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $filiere = $this->Filieres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filiere = $this->Filieres->patchEntity($filiere, $this->request->getData());
            if ($this->Filieres->save($filiere)) {
                $this->Flash->success(__('The filiere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The filiere could not be saved. Please, try again.'));
        }
        $this->set(compact('filiere'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Filiere id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $filiere = $this->Filieres->get($id);
        if ($this->Filieres->delete($filiere)) {
            $this->Flash->success(__('The filiere has been deleted.'));
        } else {
            $this->Flash->error(__('The filiere could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
