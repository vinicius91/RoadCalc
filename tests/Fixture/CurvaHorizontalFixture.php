<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CurvaHorizontalFixture
 *
 */
class CurvaHorizontalFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'curva_horizontal';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'raio' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'superelevacao' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'lc' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'transicao' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'projeto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'trecho_inicial_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'trecho_final_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_pc_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_pt_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_ts_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_sc_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_cs_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_st_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_curva_horizontal_projeto1_idx' => ['type' => 'index', 'columns' => ['projeto_id'], 'length' => []],
            'fk_curva_horizontal_trecho1_idx' => ['type' => 'index', 'columns' => ['trecho_inicial_id'], 'length' => []],
            'fk_curva_horizontal_trecho2_idx' => ['type' => 'index', 'columns' => ['trecho_final_id'], 'length' => []],
            'fk_curva_horizontal_estaca1_idx' => ['type' => 'index', 'columns' => ['estaca_pc_id'], 'length' => []],
            'fk_curva_horizontal_estaca2_idx' => ['type' => 'index', 'columns' => ['estaca_pt_id'], 'length' => []],
            'fk_curva_horizontal_estaca3_idx' => ['type' => 'index', 'columns' => ['estaca_ts_id'], 'length' => []],
            'fk_curva_horizontal_estaca4_idx' => ['type' => 'index', 'columns' => ['estaca_sc_id'], 'length' => []],
            'fk_curva_horizontal_estaca5_idx' => ['type' => 'index', 'columns' => ['estaca_cs_id'], 'length' => []],
            'fk_curva_horizontal_estaca6_idx' => ['type' => 'index', 'columns' => ['estaca_st_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_curva_horizontal_estaca1' => ['type' => 'foreign', 'columns' => ['estaca_pc_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_horizontal_estaca2' => ['type' => 'foreign', 'columns' => ['estaca_pt_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_horizontal_estaca3' => ['type' => 'foreign', 'columns' => ['estaca_ts_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_horizontal_estaca4' => ['type' => 'foreign', 'columns' => ['estaca_sc_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_horizontal_estaca5' => ['type' => 'foreign', 'columns' => ['estaca_cs_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_horizontal_estaca6' => ['type' => 'foreign', 'columns' => ['estaca_st_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_horizontal_projeto1' => ['type' => 'foreign', 'columns' => ['projeto_id'], 'references' => ['projeto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_horizontal_trecho1' => ['type' => 'foreign', 'columns' => ['trecho_inicial_id'], 'references' => ['trecho', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_curva_horizontal_trecho2' => ['type' => 'foreign', 'columns' => ['trecho_final_id'], 'references' => ['trecho', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'raio' => 1,
            'superelevacao' => 1,
            'lc' => 1,
            'transicao' => 1,
            'projeto_id' => 1,
            'trecho_inicial_id' => 1,
            'trecho_final_id' => 1,
            'estaca_pc_id' => 1,
            'estaca_pt_id' => 1,
            'estaca_ts_id' => 1,
            'estaca_sc_id' => 1,
            'estaca_cs_id' => 1,
            'estaca_st_id' => 1
        ],
    ];
}
