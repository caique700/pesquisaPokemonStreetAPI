<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pokemon Model
 *
 * @method \App\Model\Entity\Pokemon get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pokemon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pokemon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pokemon|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pokemon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pokemon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pokemon findOrCreate($search, callable $callback = null)
 */
class PokemonTable extends Table
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

        $this->table('pokemon');
        $this->displayField('idpokemon');
        $this->primaryKey('idpokemon');
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
            ->integer('idpokemon')
            ->allowEmpty('idpokemon', 'create');

        $validator
            ->allowEmpty('nome_pokemon');

        $validator
            ->allowEmpty('categoria');

        $validator
            ->allowEmpty('peso');

        $validator
            ->allowEmpty('descricao');

        return $validator;
    }
}
