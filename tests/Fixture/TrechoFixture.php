<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrechoFixture
 *
 */
class TrechoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'trecho';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ponto_inicial_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ponto_final_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_inicial_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estaca_final_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'projeto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_trecho_ponto_notavel_horizontal1_idx' => ['type' => 'index', 'columns' => ['ponto_inicial_id'], 'length' => []],
            'fk_trecho_ponto_notavel_horizontal2_idx' => ['type' => 'index', 'columns' => ['ponto_final_id'], 'length' => []],
            'fk_trecho_estaca1_idx' => ['type' => 'index', 'columns' => ['estaca_inicial_id'], 'length' => []],
            'fk_trecho_estaca2_idx' => ['type' => 'index', 'columns' => ['estaca_final_id'], 'length' => []],
            'fk_trecho_projeto1_idx' => ['type' => 'index', 'columns' => ['projeto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_trecho_estaca1' => ['type' => 'foreign', 'columns' => ['estaca_inicial_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_trecho_estaca2' => ['type' => 'foreign', 'columns' => ['estaca_final_id'], 'references' => ['estaca', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_trecho_ponto_notavel_horizontal1' => ['type' => 'foreign', 'columns' => ['ponto_inicial_id'], 'references' => ['ponto_notavel_horizontal', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_trecho_ponto_notavel_horizontal2' => ['type' => 'foreign', 'columns' => ['ponto_final_id'], 'references' => ['ponto_notavel_horizontal', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_trecho_projeto1' => ['type' => 'foreign', 'columns' => ['projeto_id'], 'references' => ['projeto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'ponto_inicial_id' => 1,
            'ponto_final_id' => 1,
            'estaca_inicial_id' => 1,
            'estaca_final_id' => 1,
            'projeto_id' => 1
        ],
    ];
}
