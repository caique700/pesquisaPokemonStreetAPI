<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Makers Controller
 *
 * @property \App\Model\Table\MakersTable $Makers
 */
class MakersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadModel('PokemonConectaTipoPokemon');
    }


    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $makers = $this->paginate($this->Makers);
        //$makers = $this->Makers->find('all');
        $this->set(compact('makers'));
        $this->set('_serialize', ['makers']);
    }

    /**
     * View method
     *
     * @param string|null $id Maker id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datsource\Exception\RecordNotFoundException When record not found.
     */
    public function view()
    {
        //$data = $this->Makers->get($this->request->data);
        //$this->RequestHandler->renderAs($this, 'json');
        $data = $this->request->query;
        $this->RequestHandler->renderAs($this,'json');
       // $marker = $this->Makers->get($json_posicao);
      /*  $result_carac = $this->PokemonConectaTipoPokemon->find()->func()->concat(["pokemon_idpokemon"],['group']);
        debug($result_carac);*/
        if( $data['boundsouth'] !="" && $data['boundwest'] !="" && $data['boundnorth']!="" && $data['boundeast'] !=""   ){
            $Filter_Pokemon = "";
            if( !empty( $data['pokemon'] ) ){
                $Filter_Pokemon = "Makers.pokemon_idpokemon = ".$data['pokemon'];
            }
            $query = $this->Makers->find()->
            select(
                ["Makers.idmakers",
                "Makers.markers_x",
                "Makers.markers_y",
                "Makers.data_cadastro",
                "Pokemon.nome_pokemon",
                "Pokemon.idpokemon",
                "Pokemon.descricao",
                "Estruturas.idestruturas",
                "Estruturas.nome",
                "Estruturas.tipo_estrutura",
                "Usuarios.idusuarios",
                "Usuarios.id_redesocial",
                "Usuarios.nome",
                "Usuarios.sexo",
                "Usuarios.email",
                "like" => $this->Makers->find()->func()->count('ActionUsuario.makers_idmakers'),
                "dislike" => $this->Makers->find()->func()->count('ActionUsuario_d.makers_idmakers'),
                 "like_dislike" => "ActionUsuario_ld.like_dislike",
                 "caracteristica" => " (SELECT GROUP_CONCAT(carac.caracteristica) FROM  pokemon_conecta_tipo_pokemon pct 
                                       INNER JOIN pokemon poke ON poke.idpokemon = pct.pokemon_idpokemon
                                       INNER JOIN tipo_pokemon carac ON carac.idtipo_pokemon = pct.tipo_pokemon_idtipo_pokemon
                                       WHERE pct.pokemon_idpokemon = Pokemon.idpokemon
                                       )"
                
                ])
            ->join([
                'Pokemon' => [
                    'table' => 'pokemon', 'type' => 'LEFT OUTER','conditions' => 'Pokemon.idpokemon = Makers.pokemon_idpokemon' 
                ]
            ])
            ->join([
                'Estruturas' => [
                    'table' => 'estruturas', 'type' => 'LEFT OUTER','conditions' => 'Estruturas.idestruturas = Makers.estruturas_idestruturas' 
                ]
            ])

            ->join([
                'Usuarios' => [
                    'table' => 'usuarios', 'type' => 'INNER', 'conditions' => 'Usuarios.idusuarios = Makers.usuarios_idusuarios'
                ]
            ])
            ->join([
                'ActionUsuario' => [
                    'table' => 'action_usuario','type' => 'LEFT OUTER','conditions' => 'ActionUsuario.makers_idmakers = Makers.idmakers AND ActionUsuario.like_dislike = 1'
                ]  
            ])
            ->join([
                'ActionUsuario_d' => [
                    'table' => 'action_usuario', 'type' => 'LEFT OUTER','conditions' => 'ActionUsuario_d.makers_idmakers = Makers.idmakers AND ActionUsuario_d.like_dislike = 2'
                ]
                ])
            ->join([
                'ActionUsuario_ld' =>[
                    'table' => 'action_usuario','type' => 'LEFT OUTER','conditions' => "ActionUsuario_ld.makers_idmakers = Makers.idmakers AND ActionUsuario_ld.usuarios_idusuarios = ".$data['usuario_id']
                ]
            ])
            ->where( [

                'Makers.markers_x > '.$data['boundsouth'],
                ' Makers.markers_x < '.$data['boundnorth'],
                ' Makers.markers_y > '.$data['boundwest'],
                ' Makers.markers_y < '.$data['boundeast'],
                $Filter_Pokemon
             
             ],
             [
               'Makers.markers_x' => 'decimal',
               'Makers.markers_y' => 'decimal'       
             ]
             )
            ->group('Makers.idmakers');

              
        }


       // $abs = hexdec ("1.12345678912345");
      // var_dump($abs);
       // echo gmp_strval($abs);
  //     debug($query);
        //$maker = $this->Makers->get($id);
        $result = $query->toArray();
      //  debug($result);
      $markers = array();
        foreach ( $result as $rs ){
            $tipoMarker = "";

            if( !empty($rs->Pokemon['idpokemon'] ) ){
                $carac = explode(",",$rs->caracteristica);
                $caracteristica = array();
                foreach( $carac as $cr){
                    $caracteristica[] = $cr;
                 }

               $tipoMarker = array(  "pokemons" => [
                    "id_pokemon" => $rs->Pokemon['idpokemon'],
                    'nome_pokemon' => $rs->Pokemon['nome_pokemon'],
                    'descricao' => $rs->Pokemon['descricao'],
                    'caracteristica' => $caracteristica
               ] );
            }else{
                $tipoMarker = array( "estruturas" => [
                    'idestrutura' => $rs->Estruturas['idestruturas'],
                    'nome_estrutura' => $rs->Estruturas['nome'],
                    'tipo_estrutura' => $rs->Estruturas['tipo_estrutura'] 
                ]);
            }

            $email = explode("@",$rs->Usuarios['email']);
            $markers[] = array( "id_markers" => $rs->idmakers, 
                "idmakers" => $rs->idmakers,
                "markers_x" => $rs->markers_x, 
                "markers_y" => $rs->markers_y,
                "data_cadastro" => date("d-m-Y H:i:s",strtotime($rs->data_cadastro)),
                "like_dislike" => ( $rs->like_dislike == NULL ) ? "0" : $rs->like_dislike ,
                "like_total" => $rs->like,
                "dislike_total" => $rs->dislike,
                "tipo_marker" => $tipoMarker, 
                "usuario" => array(
                "id_redesocial" => $rs->Usuarios['id_redesocial'],
                "nome" => $rs->Usuarios['nome'],
                "email" => $email[0],
                 "sexo" => $rs->Usuarios['sexo'],
                "id_usuario" => $rs->Usuarios['idusuarios']
                )
            );
        
        }




        $this->set(compact('markers'));
        $this->set('_serialize', ['markers']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->RequestHandler->renderAs($this, 'json');
        $maker = $this->Makers->newEntity();
        if ($this->request->is('post')) {
                $maker = $this->Makers->patchEntity($maker,$this->request->data);  
              //  debug($maker);
            if ($last = $this->Makers->save($maker)) {
             //$id_markers = $this->Makers->id;
                $lastId = $last->idmakers;
            // debug($lastId);  
            $query = $this->Makers->find()
            ->select(
                ["Makers.idmakers",
                "Makers.markers_x",
                "Makers.markers_y",
                "Makers.data_cadastro",
                "Pokemon.nome_pokemon",
                "Pokemon.idpokemon",
                "Pokemon.descricao",
                "Estruturas.idestruturas",
                "Estruturas.nome",
                "Estruturas.tipo_estrutura",
                "Usuarios.idusuarios",
                "Usuarios.id_redesocial",
                "Usuarios.nome",
                "Usuarios.email",
                "Usuarios.sexo",
                "like" => $this->Makers->find()->func()->count('ActionUsuario.makers_idmakers'),
                "dislike" => $this->Makers->find()->func()->count('ActionUsuario_d.makers_idmakers'),
                 "caracteristica" => " (SELECT GROUP_CONCAT(carac.caracteristica) FROM  pokemon_conecta_tipo_pokemon pct 
                                       INNER JOIN pokemon poke ON poke.idpokemon = pct.pokemon_idpokemon
                                       INNER JOIN tipo_pokemon carac ON carac.idtipo_pokemon = pct.tipo_pokemon_idtipo_pokemon
                                       WHERE pct.pokemon_idpokemon = Pokemon.idpokemon
                                       )"
                
                ])
            ->join([
                'Pokemon' => [
                    'table' => 'pokemon', 'type' => 'LEFT OUTER','conditions' => 'Pokemon.idpokemon = Makers.pokemon_idpokemon' 
                ]
            ])
            ->join([
                'Estruturas' => [
                    'table' => 'estruturas', 'type' => 'LEFT OUTER','conditions' => 'Estruturas.idestruturas = Makers.estruturas_idestruturas' 
                ]
            ])

            ->join([
                'Usuarios' => [
                    'table' => 'usuarios', 'type' => 'INNER', 'conditions' => 'Usuarios.idusuarios = Makers.usuarios_idusuarios'
                ]
            ])
            ->join([
                'ActionUsuario' => [
                    'table' => 'action_usuario','type' => 'LEFT OUTER','conditions' => 'ActionUsuario.makers_idmakers = Makers.idmakers AND ActionUsuario.like_dislike = 1'
                ]  
            ])
            ->join([
                'ActionUsuario_d' => [
                    'table' => 'action_usuario', 'type' => 'LEFT OUTER','conditions' => 'ActionUsuario_d.makers_idmakers = Makers.idmakers AND ActionUsuario_d.like_dislike = 2'
                ]
                ])
            ->where([
                "Makers.idmakers" => $lastId
            ])             
            ->group('Makers.idmakers');
            $result = $query->toArray();
            foreach ( $result as $rs ){
            $tipoMarker = "";

            if( !empty($rs->Pokemon['idpokemon'] ) ){
                $carac = explode(",",$rs->caracteristica);
                $caracteristica = array();
                foreach( $carac as $cr){
                    $caracteristica[] = $cr;
                 }

               $tipoMarker = array(  "pokemons" => [
                    "id_pokemon" => $rs->Pokemon['idpokemon'],
                    'nome_pokemon' => $rs->Pokemon['nome_pokemon'],
                    'descricao' => $rs->Pokemon['descricao'],
                    'caracteristica' => $caracteristica
               ] );
            }else{
                $tipoMarker = array( "estruturas" => [
                    'idestrutura' => $rs->Estruturas['idestruturas'],
                    'nome_estrutura' => $rs->Estruturas['nome'],
                    'tipo_estrutura' => $rs->Estruturas['tipo_estrutura'] 
                ]);
            }

            $email = explode("@",$rs->Usuarios['email']);
            $markers[] = array( "id_markers" => $rs->idmakers, 
                "idmakers" => $rs->idmakers,
                "markers_x" => $rs->markers_x, 
                "markers_y" => $rs->markers_y,
                "data_cadastro" => date("d-m-Y H:i:s",strtotime($rs->data_cadastro)),
                "like_dislike" => ( $rs->like_dislike == NULL ) ? "0" : $rs->like_dislike ,
                "like_total" => $rs->like,
                "dislike_total" => $rs->dislike,
                "tipo_marker" => $tipoMarker, 
                "usuario" => array(
                "id_redesocial" => $rs->Usuarios['id_redesocial'],
                "nome" => $rs->Usuarios['nome'],
                "email" => $email[0],
                 "sexo" => $rs->Usuarios['sexo'],
                "id_usuario" => $rs->Usuarios['idusuarios']
                )
            );
        
        }

            } else {
                $markers[] = "Erro";
           }

        }
        $this->set(compact('markers'));
        $this->set('_serialize', ['markers']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Maker id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maker = $this->Makers->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maker = $this->Makers->patchEntity($maker, $this->request->data);
            if ($this->Makers->save($maker)) {
                //$this->Flash->success(__('The maker has been saved.'));

               // return $this->redirect(['action' => 'index']);
            } else {
                //$this->Flash->error(__('The maker could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('maker'));
        $this->set('_serialize', ['maker']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Maker id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->RequestHandler->renderAs($this, 'json');
        $this->request->allowMethod(['post', 'delete']);
        $maker = $this->Makers->get($id);
        if ($this->Makers->delete($maker)) {
       //     $this->Flash->success(__('The maker has been deleted.'));
            $maker = array( "mensagem" => "Marker deletado com sucesso", "action" => true);
        } else {
            $maker = array( "mensagem" => "Houve um erro para deletar o Marker", "action" => false );
         //   $this->Flash->error(__('The maker could not be deleted. Please, try again.'));
        }

     //   return $this->redirect(['action' => 'index']);
        $this->set(compact('maker'));
        $this->set('_serialize', ['maker']);
    }
}
