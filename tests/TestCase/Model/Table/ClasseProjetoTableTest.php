<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClasseProjetoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClasseProjetoTable Test Case
 */
class ClasseProjetoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClasseProjetoTable
     */
    public $ClasseProjeto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.classe_projeto',
        'app.projeto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClasseProjeto') ? [] : ['className' => ClasseProjetoTable::class];
        $this->ClasseProjeto = TableRegistry::get('ClasseProjeto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClasseProjeto);

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
