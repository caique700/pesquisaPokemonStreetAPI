<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActionUsuario Model
 *
 * @method \App\Model\Entity\ActionUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\ActionUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ActionUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActionUsuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActionUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ActionUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActionUsuario findOrCreate($search, callable $callback = null)
 */
class ActionUsuarioTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('action_usuario');
        $this->displayField('idaction_usuario');
        $this->primaryKey(['idaction_usuario']);
        $this->addAssociations([
             'belongsTo' => [
                'Makers' => ['className' => 'makers','foreignKey' => 'makers_idmakers']
            ]
        ]);
        $this->addAssociations([
            'belongsTo' => [
                'Usuarios' => ['className' => 'usuarios','foreignKey' => 'usuarios_idusuarios']
            ]
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idaction_usuario')
            ->allowEmpty('idaction_usuario', 'create');

        $validator
            ->integer('usuarios_idusuarios')
            ->allowEmpty('usuarios_idusuarios', 'create');

        $validator
            ->integer('makers_idmakers')
            ->allowEmpty('makers_idmakers', 'create');

        $validator
            ->integer('like_dislike')
            ->allowEmpty('like_dislike');

        return $validator;
    }
        /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    /*public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['makers_idmakers','usuarios_idusuarios']));


        return $rules;
    }*/
}
