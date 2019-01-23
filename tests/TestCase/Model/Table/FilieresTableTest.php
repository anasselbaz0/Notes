<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilieresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilieresTable Test Case
 */
class FilieresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FilieresTable
     */
    public $Filieres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Filieres',
        'app.Concours',
        'app.Groupes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Filieres') ? [] : ['className' => FilieresTable::class];
        $this->Filieres = TableRegistry::getTableLocator()->get('Filieres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Filieres);

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
