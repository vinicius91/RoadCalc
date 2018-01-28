<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetoTable Test Case
 */
class ProjetoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetoTable
     */
    public $Projeto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.projeto',
        'app.classe_projeto',
        'app.curva_horizontal',
        'app.curva_vertical',
        'app.estaca',
        'app.ponto_notavel_horizontal',
        'app.ponto_notavel_verical',
        'app.trecho'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Projeto') ? [] : ['className' => ProjetoTable::class];
        $this->Projeto = TableRegistry::get('Projeto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Projeto);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
