<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PokemonConectaTipoPokemonFixture
 *
 */
class PokemonConectaTipoPokemonFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pokemon_conecta_tipo_pokemon';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'pokemon_idpokemon' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_pokemon_idtipo_pokemon' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_pokemon_has_tipo_pokemon_tipo_pokemon1_idx' => ['type' => 'index', 'columns' => ['tipo_pokemon_idtipo_pokemon'], 'length' => []],
            'fk_pokemon_has_tipo_pokemon_pokemon_idx' => ['type' => 'index', 'columns' => ['pokemon_idpokemon'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['pokemon_idpokemon', 'tipo_pokemon_idtipo_pokemon'], 'length' => []],
            'fk_pokemon_has_tipo_pokemon_pokemon' => ['type' => 'foreign', 'columns' => ['pokemon_idpokemon'], 'references' => ['pokemon', 'idpokemon'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pokemon_has_tipo_pokemon_tipo_pokemon1' => ['type' => 'foreign', 'columns' => ['tipo_pokemon_idtipo_pokemon'], 'references' => ['tipo_pokemon', 'idtipo_pokemon'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'pokemon_idpokemon' => 1,
            'tipo_pokemon_idtipo_pokemon' => 1
        ],
    ];
}
