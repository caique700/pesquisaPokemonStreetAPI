<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PokemonConectaTipoPokemon Model
 *
 * @method \App\Model\Entity\PokemonConectaTipoPokemon get($primaryKey, $options = [])
 * @method \App\Model\Entity\PokemonConectaTipoPokemon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PokemonConectaTipoPokemon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PokemonConectaTipoPokemon|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PokemonConectaTipoPokemon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PokemonConectaTipoPokemon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PokemonConectaTipoPokemon findOrCreate($search, callable $callback = null)
 */
class PokemonConectaTipoPokemonTable extends Table
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

        $this->table('pokemon_conecta_tipo_pokemon');
        $this->displayField('pokemon_idpokemon');
        $this->primaryKey(['pokemon_idpokemon', 'tipo_pokemon_idtipo_pokemon']);

                $this->addAssociations([
             'belongsTo' => [
                'Pokemon' => ['className' => 'pokemon','foreignKey' => 'pokemon_idpokemon']
            ]
        ]);
        $this->addAssociations([
            'belongsTo' => [
                'TipoPokemon' => ['className' => 'tipoPokemon','foreignKey' => 'tipo_pokemon_idtipo_pokemon']
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
            ->integer('pokemon_idpokemon')
            ->allowEmpty('pokemon_idpokemon', 'create');

        $validator
            ->integer('tipo_pokemon_idtipo_pokemon')
            ->allowEmpty('tipo_pokemon_idtipo_pokemon', 'create');

        return $validator;
    }
}
