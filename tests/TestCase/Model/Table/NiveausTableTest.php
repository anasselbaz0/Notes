<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NiveausTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NiveausTable Test Case
 */
class NiveausTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NiveausTable
     */
    public $Niveaus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Niveaus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Niveaus') ? [] : ['className' => NiveausTable::class];
        $this->Niveaus = TableRegistry::getTableLocator()->get('Niveaus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Niveaus);

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
