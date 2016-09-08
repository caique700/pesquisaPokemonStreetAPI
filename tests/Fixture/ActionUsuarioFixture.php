<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActionUsuarioFixture
 *
 */
class ActionUsuarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'action_usuario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idaction_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuarios_idusuarios' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'makers_idmakers' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'like_dislike' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_action_usuario_usuarios1_idx' => ['type' => 'index', 'columns' => ['usuarios_idusuarios'], 'length' => []],
            'fk_action_usuario_makers1_idx' => ['type' => 'index', 'columns' => ['makers_idmakers'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idaction_usuario', 'usuarios_idusuarios', 'makers_idmakers'], 'length' => []],
            'fk_action_usuario_makers1' => ['type' => 'foreign', 'columns' => ['makers_idmakers'], 'references' => ['makers', 'idmakers'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_action_usuario_usuarios1' => ['type' => 'foreign', 'columns' => ['usuarios_idusuarios'], 'references' => ['usuarios', 'idusuarios'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idaction_usuario' => 1,
            'usuarios_idusuarios' => 1,
            'makers_idmakers' => 1,
            'like_dislike' => 1
        ],
    ];
}
