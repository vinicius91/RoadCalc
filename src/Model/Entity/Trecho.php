<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trecho Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $ponto_inicial_id
 * @property int $ponto_final_id
 * @property int $estaca_inicial_id
 * @property int $estaca_final_id
 * @property int $projeto_id
 *
 * @property \App\Model\Entity\PontoNotavelHorizontal $ponto_notavel_horizontal
 * @property \App\Model\Entity\Estaca $estaca
 * @property \App\Model\Entity\Projeto $projeto
 */
class Trecho extends Entity
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
        'ponto_inicial_id' => true,
        'ponto_final_id' => true,
        'estaca_inicial_id' => true,
        'estaca_final_id' => true,
        'projeto_id' => true,
        'ponto_notavel_horizontal' => true,
        'estaca' => true,
        'projeto' => true
    ];
}
