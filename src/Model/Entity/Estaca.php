<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estaca Entity
 *
 * @property int $id
 * @property int $numero
 * @property float $intermediario
 * @property int $relatorio
 * @property int $coordenada_id
 * @property int $projeto_id
 *
 * @property \App\Model\Entity\Coordenada $coordenada
 * @property \App\Model\Entity\Projeto $projeto
 * @property \App\Model\Entity\PontoNotavelVerical[] $ponto_notavel_verical
 */
class Estaca extends Entity
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
        'numero' => true,
        'intermediario' => true,
        'relatorio' => true,
        'coordenada_id' => true,
        'projeto_id' => true,
        'coordenada' => true,
        'projeto' => true,
        'ponto_notavel_verical' => true
    ];
}
