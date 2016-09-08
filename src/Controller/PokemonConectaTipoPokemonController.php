<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PokemonConectaTipoPokemon Controller
 *
 * @property \App\Model\Table\PokemonConectaTipoPokemonTable $PokemonConectaTipoPokemon
 */
class PokemonConectaTipoPokemonController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $pokemonConectaTipoPokemon = $this->paginate($this->PokemonConectaTipoPokemon);

        $this->set(compact('pokemonConectaTipoPokemon'));
        $this->set('_serialize', ['pokemonConectaTipoPokemon']);
    }

    /**
     * View method
     *
     * @param string|null $id Pokemon Conecta Tipo Pokemon id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pokemonConectaTipoPokemon = $this->PokemonConectaTipoPokemon->get($id, [
            'contain' => []
        ]);

        $this->set('pokemonConectaTipoPokemon', $pokemonConectaTipoPokemon);
        $this->set('_serialize', ['pokemonConectaTipoPokemon']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pokemonConectaTipoPokemon = $this->PokemonConectaTipoPokemon->newEntity();
        if ($this->request->is('post')) {
            $pokemonConectaTipoPokemon = $this->PokemonConectaTipoPokemon->patchEntity($pokemonConectaTipoPokemon, $this->request->data);
            if ($this->PokemonConectaTipoPokemon->save($pokemonConectaTipoPokemon)) {
                $this->Flash->success(__('The pokemon conecta tipo pokemon has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pokemon conecta tipo pokemon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pokemonConectaTipoPokemon'));
        $this->set('_serialize', ['pokemonConectaTipoPokemon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pokemon Conecta Tipo Pokemon id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pokemonConectaTipoPokemon = $this->PokemonConectaTipoPokemon->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pokemonConectaTipoPokemon = $this->PokemonConectaTipoPokemon->patchEntity($pokemonConectaTipoPokemon, $this->request->data);
            if ($this->PokemonConectaTipoPokemon->save($pokemonConectaTipoPokemon)) {
                $this->Flash->success(__('The pokemon conecta tipo pokemon has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pokemon conecta tipo pokemon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pokemonConectaTipoPokemon'));
        $this->set('_serialize', ['pokemonConectaTipoPokemon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pokemon Conecta Tipo Pokemon id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pokemonConectaTipoPokemon = $this->PokemonConectaTipoPokemon->get($id);
        if ($this->PokemonConectaTipoPokemon->delete($pokemonConectaTipoPokemon)) {
            $this->Flash->success(__('The pokemon conecta tipo pokemon has been deleted.'));
        } else {
            $this->Flash->error(__('The pokemon conecta tipo pokemon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
