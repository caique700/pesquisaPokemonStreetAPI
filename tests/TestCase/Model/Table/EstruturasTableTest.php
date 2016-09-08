<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstruturasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstruturasTable Test Case
 */
class EstruturasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstruturasTable
     */
    public $Estruturas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estruturas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Estruturas') ? [] : ['className' => 'App\Model\Table\EstruturasTable'];
        $this->Estruturas = TableRegistry::get('Estruturas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estruturas);

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
