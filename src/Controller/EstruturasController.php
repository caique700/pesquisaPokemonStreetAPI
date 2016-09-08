<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estruturas Controller
 *
 * @property \App\Model\Table\EstruturasTable $Estruturas
 */
class EstruturasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $estruturas = $this->paginate($this->Estruturas);

        $this->set(compact('estruturas'));
        $this->set('_serialize', ['estruturas']);
    }

    /**
     * View method
     *
     * @param string|null $id Estrutura id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estrutura = $this->Estruturas->get($id, [
            'contain' => []
        ]);

        $this->set('estrutura', $estrutura);
        $this->set('_serialize', ['estrutura']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estrutura = $this->Estruturas->newEntity();
        if ($this->request->is('post')) {
            $estrutura = $this->Estruturas->patchEntity($estrutura, $this->request->data);
            if ($this->Estruturas->save($estrutura)) {
                $this->Flash->success(__('The estrutura has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estrutura could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('estrutura'));
        $this->set('_serialize', ['estrutura']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estrutura id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estrutura = $this->Estruturas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estrutura = $this->Estruturas->patchEntity($estrutura, $this->request->data);
            if ($this->Estruturas->save($estrutura)) {
                $this->Flash->success(__('The estrutura has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estrutura could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('estrutura'));
        $this->set('_serialize', ['estrutura']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estrutura id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estrutura = $this->Estruturas->get($id);
        if ($this->Estruturas->delete($estrutura)) {
            $this->Flash->success(__('The estrutura has been deleted.'));
        } else {
            $this->Flash->error(__('The estrutura could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
