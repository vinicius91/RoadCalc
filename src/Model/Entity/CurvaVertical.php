<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CurvaVertical Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $projeto_id
 * @property int $ponto_notavel_verical_id
 * @property int $estaca_pcv_id
 * @property int $estaca_piv_id
 * @property int $estaca_ptv_id
 *
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\PontoNotavelVertical $ponto_notavel_vertical
 * @property \App\Model\Entity\Estaca $estaca
 */
class CurvaVertical extends Entity
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
        'projeto_id' => true,
        'ponto_notavel_verical_id' => true,
        'estaca_pcv_id' => true,
        'estaca_piv_id' => true,
        'estaca_ptv_id' => true,
        'projeto' => true,
        'ponto_notavel_vertical' => true,
        'estaca' => true
    ];
}
