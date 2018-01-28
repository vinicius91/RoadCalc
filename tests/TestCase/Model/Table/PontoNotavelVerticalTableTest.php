<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PontoNotavelVerticalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PontoNotavelVerticalTable Test Case
 */
class PontoNotavelVerticalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PontoNotavelVerticalTable
     */
    public $PontoNotavelVertical;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ponto_notavel_vertical',
        'app.coordenada',
        'app.estaca',
        'app.projeto',
        'app.classe_projeto',
        'app.curva_horizontal',
        'app.trecho',
        'app.ponto_notavel_horizontal',
        'app.curva_vertical',
        'app.ponto_notavel_verical'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PontoNotavelVertical') ? [] : ['className' => PontoNotavelVerticalTable::class];
        $this->PontoNotavelVertical = TableRegistry::get('PontoNotavelVertical', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PontoNotavelVertical);

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
