<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PontoNotavelHorizontalFixture
 *
 */
class PontoNotavelHorizontalFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ponto_notavel_horizontal';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'coordenada_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'projeto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_ponto_notavel_horizontal_coordenada_idx' => ['type' => 'index', 'columns' => ['coordenada_id'], 'length' => []],
            'fk_ponto_notavel_horizontal_projeto1_idx' => ['type' => 'index', 'columns' => ['projeto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_ponto_notavel_horizontal_coordenada' => ['type' => 'foreign', 'columns' => ['coordenada_id'], 'references' => ['coordenada', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ponto_notavel_horizontal_projeto1' => ['type' => 'foreign', 'columns' => ['projeto_id'], 'references' => ['projeto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'projeto_id' => 1
        ],
    ];
}
