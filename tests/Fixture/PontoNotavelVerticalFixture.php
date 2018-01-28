<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PontoNotavelVerticalFixture
 *
 */
class PontoNotavelVerticalFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ponto_notavel_vertical';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'coordenada_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'projeto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_ponto_notavel_verical_coordenada1_idx' => ['type' => 'index', 'columns' => ['coordenada_id'], 'length' => []],
            'fk_ponto_notavel_verical_estaca1_idx' => ['type' => 'index', 'columns' => ['estaca_id'], 'length' => []],
            'fk_ponto_notavel_verical_projeto1_idx' => ['type' => 'index', 'columns' => ['projeto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_ponto_notavel_verical_coordenada1' => ['type' => 'foreign', 'columns' => ['coordenada_id'], 'references' => ['coordenada', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ponto_notavel_verical_estaca1' => ['type' => 'foreign', 'columns' => ['estaca_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ponto_notavel_verical_projeto1' => ['type' => 'foreign', 'columns' => ['projeto_id'], 'references' => ['projeto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'coordenada_id' => 1,
            'estaca_id' => 1,
            'projeto_id' => 1
        ],
    ];
}
