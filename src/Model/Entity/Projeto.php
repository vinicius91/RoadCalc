<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projeto Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $mapa_rederizado
 * @property int $estacas_geradas
 * @property int $classe_projeto_id
 *
 * @property \App\Model\Entity\ClasseProjeto $classe_projeto
 * @property \App\Model\Entity\CurvaHorizontal[] $curva_horizontal
 * @property \App\Model\Entity\CurvaVertical[] $curva_vertical
 * @property \App\Model\Entity\Estaca[] $estaca
 * @property \App\Model\Entity\PontoNotavelHorizontal[] $ponto_notavel_horizontal
 * @property \App\Model\Entity\PontoNotavelVerical[] $ponto_notavel_verical
 * @property \App\Model\Entity\Trecho[] $trecho
 */
class Projeto extends Entity
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
        'mapa_rederizado' => true,
        'estacas_geradas' => true,
        'classe_projeto_id' => true,
        'classe_projeto' => true,
        'curva_horizontal' => true,
        'curva_vertical' => true,
        'estaca' => true,
        'ponto_notavel_horizontal' => true,
        'ponto_notavel_verical' => true,
        'trecho' => true
    ];
}
