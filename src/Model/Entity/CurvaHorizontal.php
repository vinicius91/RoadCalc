<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CurvaHorizontal Entity
 *
 * @property int $id
 * @property float $raio
 * @property float $superelevacao
 * @property float $lc
 * @property int $transicao
 * @property int $projeto_id
 * @property int $trecho_inicial_id
 * @property int $trecho_final_id
 * @property int $estaca_pc_id
 * @property int $estaca_pt_id
 * @property int $estaca_ts_id
 * @property int $estaca_sc_id
 * @property int $estaca_cs_id
 * @property int $estaca_st_id
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\Trecho $trecho
 * @property \App\Model\Entity\Estaca $estaca
 */
class CurvaHorizontal extends Entity
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
        'raio' => true,
        'superelevacao' => true,
        'lc' => true,
        'transicao' => true,
        'projeto_id' => true,
        'trecho_inicial_id' => true,
        'trecho_final_id' => true,
        'estaca_pc_id' => true,
        'estaca_pt_id' => true,
        'estaca_ts_id' => true,
        'estaca_sc_id' => true,
        'estaca_cs_id' => true,
        'estaca_st_id' => true,
        'projeto' => true,
        'trecho' => true,
        'estaca' => true
    ];
}
