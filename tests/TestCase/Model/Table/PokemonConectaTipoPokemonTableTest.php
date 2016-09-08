<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PokemonConectaTipoPokemonTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PokemonConectaTipoPokemonTable Test Case
 */
class PokemonConectaTipoPokemonTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PokemonConectaTipoPokemonTable
     */
    public $PokemonConectaTipoPokemon;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pokemon_conecta_tipo_pokemon'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PokemonConectaTipoPokemon') ? [] : ['className' => 'App\Model\Table\PokemonConectaTipoPokemonTable'];
        $this->PokemonConectaTipoPokemon = TableRegistry::get('PokemonConectaTipoPokemon', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PokemonConectaTipoPokemon);

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
