<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoPokemon Controller
 *
 * @property \App\Model\Table\TipoPokemonTable $TipoPokemon
 */
class TipoPokemonController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tipoPokemon = $this->paginate($this->TipoPokemon);

        $this->set(compact('tipoPokemon'));
        $this->set('_serialize', ['tipoPokemon']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Pokemon id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoPokemon = $this->TipoPokemon->get($id, [
            'contain' => []
        ]);

        $this->set('tipoPokemon', $tipoPokemon);
        $this->set('_serialize', ['tipoPokemon']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoPokemon = $this->TipoPokemon->newEntity();
        if ($this->request->is('post')) {
            $tipoPokemon = $this->TipoPokemon->patchEntity($tipoPokemon, $this->request->data);
            if ($this->TipoPokemon->save($tipoPokemon)) {
                $this->Flash->success(__('The tipo pokemon has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo pokemon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoPokemon'));
        $this->set('_serialize', ['tipoPokemon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Pokemon id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoPokemon = $this->TipoPokemon->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoPokemon = $this->TipoPokemon->patchEntity($tipoPokemon, $this->request->data);
            if ($this->TipoPokemon->save($tipoPokemon)) {
                $this->Flash->success(__('The tipo pokemon has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo pokemon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoPokemon'));
        $this->set('_serialize', ['tipoPokemon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Pokemon id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoPokemon = $this->TipoPokemon->get($id);
        if ($this->TipoPokemon->delete($tipoPokemon)) {
            $this->Flash->success(__('The tipo pokemon has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo pokemon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
