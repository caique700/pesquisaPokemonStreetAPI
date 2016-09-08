<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estruturas Model
 *
 * @method \App\Model\Entity\Estrutura get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estrutura newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estrutura[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estrutura|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estrutura patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estrutura[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estrutura findOrCreate($search, callable $callback = null)
 */
class EstruturasTable extends Table
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

        $this->table('estruturas');
        $this->displayField('idestruturas');
        $this->primaryKey('idestruturas');
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
            ->integer('idestruturas')
            ->allowEmpty('idestruturas', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('tipo_estrutura', 'create')
            ->notEmpty('tipo_estrutura');

        return $validator;
    }
}
