<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoPokemon Model
 *
 * @method \App\Model\Entity\TipoPokemon get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoPokemon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoPokemon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoPokemon|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoPokemon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoPokemon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoPokemon findOrCreate($search, callable $callback = null)
 */
class TipoPokemonTable extends Table
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

        $this->table('tipo_pokemon');
        $this->displayField('idtipo_pokemon');
        $this->primaryKey('idtipo_pokemon');
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
            ->integer('idtipo_pokemon')
            ->allowEmpty('idtipo_pokemon', 'create');

        $validator
            ->allowEmpty('caracteristica');

        return $validator;
    }
}
