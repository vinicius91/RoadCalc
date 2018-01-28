<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ClasseProjeto Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $caracteristicas
 * @property string $criterio_clas_tecnica
 * @property string $relevo
 * @property float $velocidade_projeto
 * @property float $velocidade_diretriz_min
 * @property int $dist_min_visibilidade_parada_min_d
 * @property int $dist_min_visibilidade_parada_min_a
 * @property int $dist_min_visibilidade_ultrapassagem
 * @property int $raio_minimo_superelevacao_max
 * @property int $superelevacao_maxima
 * @property int $rampa_maxima
 * @property int $k_curva_convexa_min_d
 * @property int $k_curva_convexa_min_a
 * @property int $k_curva_concava_min_d
 * @property int $k_curva_concava_min_a
 * @property int $largura_faixa_transito
 * @property int $largura_acostamento_externo_min_d
 * @property int $largura_acostamento_externo_min_a
 * @property int $largura_acostamento_interno_duas_fx_min
 * @property int $largura_acostamento_interno_tres_fx_min
 * @property int $largura_acostamento_interno_quatro_fx_min
 * @property int $largura_acostamento_interno_duas_fx_max
 * @property int $largura_acostamento_interno_tres_fx_max
 * @property int $largura_acostamento_interno_quatro_fx_max
 * @property int $gabarito_vertical_min_d
 * @property int $gabarito_vertical_min_a
 * @property int $afastamento_min_borda_acost_obstaculos_cont
 * @property int $afastamento_min_borda_acost_obstaculos_iso
 * @property int $largura_cant_central_min_normal
 * @property int $largura_cant_central_min_absoluto
 * @property int $largura_cant_central_min_desejavel
 * @property int $largura_cant_central_max_desejavel
 * @property int $largura_cant_central_max_absoluto
 *
 * @property \App\Model\Entity\Projeto[] $projeto
 */
class ClasseProjeto extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'caracteristicas' => true,
        'criterio_clas_tecnica' => true,
        'relevo' => true,
        'velocidade_projeto' => true,
        'velocidade_diretriz_min' => true,
        'dist_min_visibilidade_parada_min_d' => true,
        'dist_min_visibilidade_parada_min_a' => true,
        'dist_min_visibilidade_ultrapassagem' => true,
        'raio_minimo_superelevacao_max' => true,
        'superelevacao_maxima' => true,
        'rampa_maxima' => true,
        'k_curva_convexa_min_d' => true,
        'k_curva_convexa_min_a' => true,
        'k_curva_concava_min_d' => true,
        'k_curva_concava_min_a' => true,
        'largura_faixa_transito' => true,
        'largura_acostamento_externo_min_d' => true,
        'largura_acostamento_externo_min_a' => true,
        'largura_acostamento_interno_duas_fx_min' => true,
        'largura_acostamento_interno_tres_fx_min' => true,
        'largura_acostamento_interno_quatro_fx_min' => true,
        'largura_acostamento_interno_duas_fx_max' => true,
        'largura_acostamento_interno_tres_fx_max' => true,
        'largura_acostamento_interno_quatro_fx_max' => true,
        'gabarito_vertical_min_d' => true,
        'gabarito_vertical_min_a' => true,
        'afastamento_min_borda_acost_obstaculos_cont' => true,
        'afastamento_min_borda_acost_obstaculos_iso' => true,
        'largura_cant_central_min_normal' => true,
        'largura_cant_central_min_absoluto' => true,
        'largura_cant_central_min_desejavel' => true,
        'largura_cant_central_max_desejavel' => true,
        'largura_cant_central_max_absoluto' => true,
        'projeto' => true
    ];
}
