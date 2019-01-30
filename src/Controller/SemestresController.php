<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Semestres Controller
 *
 * @property \App\Model\Table\SemestresTable $Semestres
 *
 * @method \App\Model\Entity\Semestre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SemestresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Niveaus']
        ];
        $semestres = $this->paginate($this->Semestres);

        $this->set(compact('semestres'));
    }

    /**
     * View method
     *
     * @param string|null $id Semestre id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $semestre = $this->Semestres->get($id, [
            'contain' => ['Niveaus', 'Autorisations', 'Enseigners', 'Modules', 'PreinscriptionsInfos']
        ]);

        $this->set('semestre', $semestre);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $semestre = $this->Semestres->newEntity();
        if ($this->request->is('post')) {
            $semestre = $this->Semestres->patchEntity($semestre, $this->request->getData());
            if ($this->Semestres->save($semestre)) {
                $this->Flash->success(__('The semestre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semestre could not be saved. Please, try again.'));
        }
        $niveaus = $this->Semestres->Niveaus->find('list', ['limit' => 200]);
        $this->set(compact('semestre', 'niveaus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Semestre id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $semestre = $this->Semestres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $semestre = $this->Semestres->patchEntity($semestre, $this->request->getData());
            if ($this->Semestres->save($semestre)) {
                $this->Flash->success(__('The semestre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semestre could not be saved. Please, try again.'));
        }
        $niveaus = $this->Semestres->Niveaus->find('list', ['limit' => 200]);
        $this->set(compact('semestre', 'niveaus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Semestre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $semestre = $this->Semestres->get($id);
        if ($this->Semestres->delete($semestre)) {
            $this->Flash->success(__('The semestre has been deleted.'));
        } else {
            $this->Flash->error(__('The semestre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
