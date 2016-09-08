<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Makers Model
 *
 * @method \App\Model\Entity\Maker get($primaryKey, $options = [])
 * @method \App\Model\Entity\Maker newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Maker[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Maker|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Maker patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Maker[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Maker findOrCreate($search, callable $callback = null)
 */
class MakersTable extends Table
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

        $this->table('makers');
        $this->displayField('idmakers');
        $this->primaryKey(['idmakers']);
        $this->addAssociations([
            'belongsTo' => [
                'Pokemon' => ['className' => 'Pokemon','foreignKey' => 'pokemon_idpokemon'],
            ],

        ]);
        $this->addAssociations([
             'belongsTo' => [
                'Estruturas' => ['className' => 'estruturas','foreignKey' => 'estruturas_idestruturas']
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
            ->integer('idmakers')
            ->allowEmpty('idmakers', 'create');

        $validator
            ->allowEmpty('markers_x');

        $validator
            ->allowEmpty('markers_y');

        $validator
            ->integer('estruturas_idestruturas')
            ->allowEmpty('estruturas_idestruturas');

        $validator
            ->integer('idpokemon')
            ->allowEmpty('idpokemon', 'create');

        return $validator;
    }
}
