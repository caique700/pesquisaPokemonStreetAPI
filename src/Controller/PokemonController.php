<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pokemon Controller
 *
 * @property \App\Model\Table\PokemonTable $Pokemon
 */
class PokemonController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $pokemon = $this->paginate($this->Pokemon);

        $this->set(compact('pokemon'));
        $this->set('_serialize', ['pokemon']);
    }

    /**
     * View method
     *
     * @param string|null $id Pokemon id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pokemon = $this->Pokemon->get($id, [
            'contain' => []
        ]);

        $this->set('pokemon', $pokemon);
        $this->set('_serialize', ['pokemon']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pokemon = $this->Pokemon->newEntity();
        if ($this->request->is('post')) {
            $pokemon = $this->Pokemon->patchEntity($pokemon, $this->request->data);
            if ($this->Pokemon->save($pokemon)) {
                $this->Flash->success(__('The pokemon has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pokemon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pokemon'));
        $this->set('_serialize', ['pokemon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pokemon id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pokemon = $this->Pokemon->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pokemon = $this->Pokemon->patchEntity($pokemon, $this->request->data);
            if ($this->Pokemon->save($pokemon)) {
                $this->Flash->success(__('The pokemon has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pokemon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pokemon'));
        $this->set('_serialize', ['pokemon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pokemon id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pokemon = $this->Pokemon->get($id);
        if ($this->Pokemon->delete($pokemon)) {
            $this->Flash->success(__('The pokemon has been deleted.'));
        } else {
            $this->Flash->error(__('The pokemon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
