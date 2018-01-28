<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordenadaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordenadaTable Test Case
 */
class CoordenadaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordenadaTable
     */
    public $Coordenada;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.coordenada',
        'app.estaca',
        'app.ponto_notavel_horizontal',
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
        $config = TableRegistry::exists('Coordenada') ? [] : ['className' => CoordenadaTable::class];
        $this->Coordenada = TableRegistry::get('Coordenada', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Coordenada);

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
