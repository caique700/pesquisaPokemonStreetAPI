<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ActionUsuario Controller
 *
 * @property \App\Model\Table\ActionUsuarioTable $ActionUsuario
 */
class ActionUsuarioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $actionUsuario = $this->paginate($this->ActionUsuario);

        $this->set(compact('actionUsuario'));
        $this->set('_serialize', ['actionUsuario']);
    }

    /**
     * View method
     *
     * @param string|null $id Action Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actionUsuario = $this->ActionUsuario->get($id, [
            'contain' => []
        ]);

        $this->set('actionUsuario', $actionUsuario);
        $this->set('_serialize', ['actionUsuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
            $this->RequestHandler->renderAs($this,'json');
            $action = $this->ActionUsuario->newEntity();
            if ($this->request->is('post')) {
                //$verificaUsuario = $this->Usuarios->identify();
               // debug($this->request->data);
                 //   debug($this->request->data);
                    $action = $this->ActionUsuario->patchEntity($action,$this->request->data);
                  //  debug($action);
                    $actionVerify = $this->ActionUsuario->find()
                                    ->where( 
                                        [
                                            "usuarios_idusuarios" => $this->request->data['usuarios_idusuarios'],
                                            "makers_idmakers" => $this->request->data['makers_idmakers']
                                        ] 
                                    ); 
                  //  debug($actionVerify->count());
                    if ($actionVerify->count() < 1) {
                       $this->ActionUsuario->save($action);
                       // $this->Flash->success(__('The usuario has been saved.'));
                        //$usuario = array( "mensagem" => "Cadastro realizado com sucesso","action" => true);
                        //return $this->redirect(['action' => 'index']);
                     //   $action = $this->ActionUsuario->find()->where(["id_redesocial" => $this->request->data['id_redesocial']]);
                  //      debug( $action);
                    } else {
                       
                       //$usuario = TableRegistry::get('usuarios');
                        $action = $this->ActionUsuario->query()->update()->set(['like_dislike' => $this->request->data['like_dislike']])->where(
                            [
                            "usuarios_idusuarios" => $this->request->data['usuarios_idusuarios'],
                            'makers_idmakers' => $this->request->data['makers_idmakers']
                            ]
                            )->execute();             
                       // $updateUser = $usuario->update()->set( ["token" => $this->request->data->token] )->where( ['id_redesocial' => $this->request->data->id_redesocial] )->execute;

                        //debug($result);


                       // $usuario = array( "mensagem" => "Erro no cadastro","action" => false );
                        //$this->Flash->error(__('The usuario could not be saved. Please, try again.'));
                    
                    }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Action Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actionUsuario = $this->ActionUsuario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actionUsuario = $this->ActionUsuario->patchEntity($actionUsuario, $this->request->data);
            if ($this->ActionUsuario->save($actionUsuario)) {
                $this->Flash->success(__('The action usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The action usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('actionUsuario'));
        $this->set('_serialize', ['actionUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Action Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actionUsuario = $this->ActionUsuario->get($id);
        if ($this->ActionUsuario->delete($actionUsuario)) {
            $this->Flash->success(__('The action usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The action usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
