<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnneeScolairesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnneeScolairesTable Test Case
 */
class AnneeScolairesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AnneeScolairesTable
     */
    public $AnneeScolaires;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AnneeScolaires',
        'app.Autorisations',
        'app.Enseigners',
        'app.Etudiers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AnneeScolaires') ? [] : ['className' => AnneeScolairesTable::class];
        $this->AnneeScolaires = TableRegistry::getTableLocator()->get('AnneeScolaires', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AnneeScolaires);

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
