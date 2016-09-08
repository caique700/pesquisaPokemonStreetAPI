<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActionUsuarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActionUsuarioTable Test Case
 */
class ActionUsuarioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActionUsuarioTable
     */
    public $ActionUsuario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.action_usuario'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ActionUsuario') ? [] : ['className' => 'App\Model\Table\ActionUsuarioTable'];
        $this->ActionUsuario = TableRegistry::get('ActionUsuario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActionUsuario);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
