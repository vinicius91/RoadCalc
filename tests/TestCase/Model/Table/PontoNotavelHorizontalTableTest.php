<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PontoNotavelHorizontalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PontoNotavelHorizontalTable Test Case
 */
class PontoNotavelHorizontalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PontoNotavelHorizontalTable
     */
    public $PontoNotavelHorizontal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ponto_notavel_horizontal',
        'app.coordenada',
        'app.estaca',
        'app.projeto',
        'app.classe_projeto',
        'app.curva_horizontal',
        'app.curva_vertical',
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
        $config = TableRegistry::exists('PontoNotavelHorizontal') ? [] : ['className' => PontoNotavelHorizontalTable::class];
        $this->PontoNotavelHorizontal = TableRegistry::get('PontoNotavelHorizontal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PontoNotavelHorizontal);

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
