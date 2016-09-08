<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoPokemonTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoPokemonTable Test Case
 */
class TipoPokemonTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoPokemonTable
     */
    public $TipoPokemon;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_pokemon'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoPokemon') ? [] : ['className' => 'App\Model\Table\TipoPokemonTable'];
        $this->TipoPokemon = TableRegistry::get('TipoPokemon', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoPokemon);

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
