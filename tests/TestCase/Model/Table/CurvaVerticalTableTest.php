<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CurvaVerticalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CurvaVerticalTable Test Case
 */
class CurvaVerticalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CurvaVerticalTable
     */
    public $CurvaVertical;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.curva_vertical',
        'app.projeto',
        'app.classe_projeto',
        'app.curva_horizontal',
        'app.trecho',
        'app.ponto_notavel_horizontal',
        'app.coordenada',
        'app.estaca',
        'app.ponto_notavel_verical',
        'app.ponto_notavel_vertical'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CurvaVertical') ? [] : ['className' => CurvaVerticalTable::class];
        $this->CurvaVertical = TableRegistry::get('CurvaVertical', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CurvaVertical);

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
