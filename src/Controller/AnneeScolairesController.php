<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AnneeScolaires Controller
 *
 * @property \App\Model\Table\AnneeScolairesTable $AnneeScolaires
 *
 * @method \App\Model\Entity\AnneeScolaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnneeScolairesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $anneeScolaires = $this->paginate($this->AnneeScolaires);

        $this->set(compact('anneeScolaires'));
    }

    /**
     * View method
     *
     * @param string|null $id Annee Scolaire id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $anneeScolaire = $this->AnneeScolaires->get($id, [
            'contain' => ['Autorisations', 'Enseigners', 'Etudiers']
        ]);

        $this->set('anneeScolaire', $anneeScolaire);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $anneeScolaire = $this->AnneeScolaires->newEntity();
        if ($this->request->is('post')) {
            $anneeScolaire = $this->AnneeScolaires->patchEntity($anneeScolaire, $this->request->getData());
            if ($this->AnneeScolaires->save($anneeScolaire)) {
                $this->Flash->success(__('The annee scolaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The annee scolaire could not be saved. Please, try again.'));
        }
        $this->set(compact('anneeScolaire'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Annee Scolaire id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $anneeScolaire = $this->AnneeScolaires->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $anneeScolaire = $this->AnneeScolaires->patchEntity($anneeScolaire, $this->request->getData());
            if ($this->AnneeScolaires->save($anneeScolaire)) {
                $this->Flash->success(__('The annee scolaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The annee scolaire could not be saved. Please, try again.'));
        }
        $this->set(compact('anneeScolaire'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Annee Scolaire id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $anneeScolaire = $this->AnneeScolaires->get($id);
        if ($this->AnneeScolaires->delete($anneeScolaire)) {
            $this->Flash->success(__('The annee scolaire has been deleted.'));
        } else {
            $this->Flash->error(__('The annee scolaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
