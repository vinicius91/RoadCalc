<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrechoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrechoTable Test Case
 */
class TrechoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrechoTable
     */
    public $Trecho;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trecho',
        'app.ponto_notavel_horizontal',
        'app.coordenada',
        'app.estaca',
        'app.projeto',
        'app.classe_projeto',
        'app.curva_horizontal',
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
        $config = TableRegistry::exists('Trecho') ? [] : ['className' => TrechoTable::class];
        $this->Trecho = TableRegistry::get('Trecho', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trecho);

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
