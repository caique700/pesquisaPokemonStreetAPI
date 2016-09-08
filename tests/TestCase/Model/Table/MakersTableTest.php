<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MakersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MakersTable Test Case
 */
class MakersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MakersTable
     */
    public $Makers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.makers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Makers') ? [] : ['className' => 'App\Model\Table\MakersTable'];
        $this->Makers = TableRegistry::get('Makers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Makers);

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
