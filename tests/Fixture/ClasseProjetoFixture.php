<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClasseProjetoFixture
 *
 */
class ClasseProjetoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'classe_projeto';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'caracteristicas' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'criterio_clas_tecnica' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'relevo' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'velocidade_projeto' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'velocidade_diretriz_min' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'dist_min_visibilidade_parada_min_d' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dist_min_visibilidade_parada_min_a' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dist_min_visibilidade_ultrapassagem' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'raio_minimo_superelevacao_max' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'superelevacao_maxima' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rampa_maxima' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'k_curva_convexa_min_d' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'k_curva_convexa_min_a' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'k_curva_concava_min_d' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'k_curva_concava_min_a' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_faixa_transito' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_acostamento_externo_min_d' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_acostamento_externo_min_a' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_acostamento_interno_duas_fx_min' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_acostamento_interno_tres_fx_min' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_acostamento_interno_quatro_fx_min' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_acostamento_interno_duas_fx_max' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_acostamento_interno_tres_fx_max' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_acostamento_interno_quatro_fx_max' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'gabarito_vertical_min_d' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'gabarito_vertical_min_a' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'afastamento_min_borda_acost_obstaculos_cont' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'afastamento_min_borda_acost_obstaculos_iso' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_cant_central_min_normal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_cant_central_min_absoluto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_cant_central_min_desejavel' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_cant_central_max_desejavel' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'largura_cant_central_max_absoluto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
            'caracteristicas' => 'Lorem ipsum dolor sit amet',
            'criterio_clas_tecnica' => 'Lorem ipsum dolor sit amet',
            'relevo' => 'Lorem ipsum dolor sit amet',
            'velocidade_projeto' => 1,
            'velocidade_diretriz_min' => 1,
            'dist_min_visibilidade_parada_min_d' => 1,
            'dist_min_visibilidade_parada_min_a' => 1,
            'dist_min_visibilidade_ultrapassagem' => 1,
            'raio_minimo_superelevacao_max' => 1,
            'superelevacao_maxima' => 1,
            'rampa_maxima' => 1,
            'k_curva_convexa_min_d' => 1,
            'k_curva_convexa_min_a' => 1,
            'k_curva_concava_min_d' => 1,
            'k_curva_concava_min_a' => 1,
            'largura_faixa_transito' => 1,
            'largura_acostamento_externo_min_d' => 1,
            'largura_acostamento_externo_min_a' => 1,
            'largura_acostamento_interno_duas_fx_min' => 1,
            'largura_acostamento_interno_tres_fx_min' => 1,
            'largura_acostamento_interno_quatro_fx_min' => 1,
            'largura_acostamento_interno_duas_fx_max' => 1,
            'largura_acostamento_interno_tres_fx_max' => 1,
            'largura_acostamento_interno_quatro_fx_max' => 1,
            'gabarito_vertical_min_d' => 1,
            'gabarito_vertical_min_a' => 1,
            'afastamento_min_borda_acost_obstaculos_cont' => 1,
            'afastamento_min_borda_acost_obstaculos_iso' => 1,
            'largura_cant_central_min_normal' => 1,
            'largura_cant_central_min_absoluto' => 1,
            'largura_cant_central_min_desejavel' => 1,
            'largura_cant_central_max_desejavel' => 1,
            'largura_cant_central_max_absoluto' => 1
        ],
    ];
}
