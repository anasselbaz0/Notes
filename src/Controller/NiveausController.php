<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Niveaus Controller
 *
 * @property \App\Model\Table\NiveausTable $Niveaus
 *
 * @method \App\Model\Entity\Niveau[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NiveausController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $niveaus = $this->paginate($this->Niveaus);

        $this->set(compact('niveaus'));
    }

    /**
     * View method
     *
     * @param string|null $id Niveau id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $niveau = $this->Niveaus->get($id, [
            'contain' => []
        ]);

        $this->set('niveau', $niveau);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $niveau = $this->Niveaus->newEntity();
        if ($this->request->is('post')) {
            $niveau = $this->Niveaus->patchEntity($niveau, $this->request->getData());
            if ($this->Niveaus->save($niveau)) {
                $this->Flash->success(__('The niveau has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The niveau could not be saved. Please, try again.'));
        }
        $this->set(compact('niveau'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Niveau id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $niveau = $this->Niveaus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $niveau = $this->Niveaus->patchEntity($niveau, $this->request->getData());
            if ($this->Niveaus->save($niveau)) {
                $this->Flash->success(__('The niveau has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The niveau could not be saved. Please, try again.'));
        }
        $this->set(compact('niveau'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Niveau id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $niveau = $this->Niveaus->get($id);
        if ($this->Niveaus->delete($niveau)) {
            $this->Flash->success(__('The niveau has been deleted.'));
        } else {
            $this->Flash->error(__('The niveau could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
