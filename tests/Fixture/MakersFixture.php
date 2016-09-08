<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MakersFixture
 *
 */
class MakersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idmakers' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'markers_x' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'markes_y' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'estruturas_idestruturas' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pokemon_idpokemon' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_makers_estruturas1_idx' => ['type' => 'index', 'columns' => ['estruturas_idestruturas'], 'length' => []],
            'fk_makers_pokemon1_idx' => ['type' => 'index', 'columns' => ['pokemon_idpokemon'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idmakers', 'pokemon_idpokemon'], 'length' => []],
            'fk_makers_estruturas1' => ['type' => 'foreign', 'columns' => ['estruturas_idestruturas'], 'references' => ['estruturas', 'idestruturas'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_makers_pokemon1' => ['type' => 'foreign', 'columns' => ['pokemon_idpokemon'], 'references' => ['pokemon', 'idpokemon'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idmakers' => 1,
            'markers_x' => 'Lorem ipsum dolor sit amet',
            'markes_y' => 'Lorem ipsum dolor sit amet',
            'estruturas_idestruturas' => 1,
            'pokemon_idpokemon' => 1
        ],
    ];
}
