<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\ORM\TableRegistry;
/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 */
class UsuariosController extends AppController
{


    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $usuarios = $this->paginate($this->Usuarios);

        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);

        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->RequestHandler->renderAs($this,'json');
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            //$verificaUsuario = $this->Usuarios->identify();
            //debug($this->request->data);
                $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
                if ($this->Usuarios->save($usuario)) {
                   // $this->Flash->success(__('The usuario has been saved.'));
                    //$usuario = array( "mensagem" => "Cadastro realizado com sucesso","action" => true);
                    //return $this->redirect(['action' => 'index']);
                    $usuario = $this->Usuarios->find()->where(["id_redesocial" => $this->request->data['id_redesocial']]);
                    $result = $usuario->toArray();
                    $usuario = array( "idusuarios" => $result[0]->idusuarios, 
                        "id_redesocial" => $result[0]->id_redesocial, 
                        "nome" => $result[0]->nome,
                        "sexo" => $result[0]->sexo,
                        "email" => $result[0]->email,
                        'token' => $result[0]->token
                        );
                } else {
                   
                   //$usuario = TableRegistry::get('usuarios');
                    $usuario = $this->Usuarios->query()->update()->set(['token' => $this->request->data['token']])->where(
                        [
                        "id_redesocial" => $this->request->data['id_redesocial']
                        ],
                        ["id_redesocial" => "integer"]
                        )->execute();             
                   // $updateUser = $usuario->update()->set( ["token" => $this->request->data->token] )->where( ['id_redesocial' => $this->request->data->id_redesocial] )->execute;
                    $usuario = $this->Usuarios->find()->where(["id_redesocial" => $this->request->data['id_redesocial']]);
                    $result = $usuario->toArray();
                    //debug($result);
                    $usuario = array( "idusuarios" => $result[0]->idusuarios, 
                        "id_redesocial" => $result[0]->id_redesocial, 
                        "nome" => $result[0]->nome,
                        "sexo" => $result[0]->sexo,
                        "email" => $result[0]->email,
                        'token' => $result[0]->token
                        );

                   // $usuario = array( "mensagem" => "Erro no cadastro","action" => false );
                    //$this->Flash->error(__('The usuario could not be saved. Please, try again.'));
                
                }

            $this->set(compact('usuario'));
            $this->set('_serialize', ['usuario']);
    
        }   
    }
    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */

/*    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }
*/
    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
