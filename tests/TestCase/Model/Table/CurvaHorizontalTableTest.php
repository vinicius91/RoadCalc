<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CurvaHorizontalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CurvaHorizontalTable Test Case
 */
class CurvaHorizontalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CurvaHorizontalTable
     */
    public $CurvaHorizontal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.curva_horizontal',
        'app.projeto',
        'app.classe_projeto',
        'app.curva_vertical',
        'app.estaca',
        'app.coordenada',
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
        $config = TableRegistry::exists('CurvaHorizontal') ? [] : ['className' => CurvaHorizontalTable::class];
        $this->CurvaHorizontal = TableRegistry::get('CurvaHorizontal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CurvaHorizontal);

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
