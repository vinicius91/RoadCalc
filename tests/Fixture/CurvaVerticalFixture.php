<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CurvaVerticalFixture
 *
 */
class CurvaVerticalFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'curva_vertical';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'projeto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ponto_notavel_verical_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_pcv_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_piv_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_ptv_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_curva_vertical_projeto1_idx' => ['type' => 'index', 'columns' => ['projeto_id'], 'length' => []],
            'fk_curva_vertical_ponto_notavel_verical1_idx' => ['type' => 'index', 'columns' => ['ponto_notavel_verical_id'], 'length' => []],
            'fk_curva_vertical_estaca1_idx' => ['type' => 'index', 'columns' => ['estaca_pcv_id'], 'length' => []],
            'fk_curva_vertical_estaca2_idx' => ['type' => 'index', 'columns' => ['estaca_piv_id'], 'length' => []],
            'fk_curva_vertical_estaca3_idx' => ['type' => 'index', 'columns' => ['estaca_ptv_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_curva_vertical_estaca1' => ['type' => 'foreign', 'columns' => ['estaca_pcv_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_vertical_estaca2' => ['type' => 'foreign', 'columns' => ['estaca_piv_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_vertical_estaca3' => ['type' => 'foreign', 'columns' => ['estaca_ptv_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_vertical_ponto_notavel_verical1' => ['type' => 'foreign', 'columns' => ['ponto_notavel_verical_id'], 'references' => ['ponto_notavel_vertical', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_vertical_projeto1' => ['type' => 'foreign', 'columns' => ['projeto_id'], 'references' => ['projeto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'projeto_id' => 1,
            'ponto_notavel_verical_id' => 1,
            'estaca_pcv_id' => 1,
            'estaca_piv_id' => 1,
            'estaca_ptv_id' => 1
        ],
    ];
}
