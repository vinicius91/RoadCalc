<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstacaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstacaTable Test Case
 */
class EstacaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstacaTable
     */
    public $Estaca;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estaca',
        'app.coordenada',
        'app.ponto_notavel_horizontal',
        'app.ponto_notavel_verical',
        'app.projeto',
        'app.classe_projeto',
        'app.curva_horizontal',
        'app.curva_vertical',
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
        $config = TableRegistry::exists('Estaca') ? [] : ['className' => EstacaTable::class];
        $this->Estaca = TableRegistry::get('Estaca', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estaca);

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
