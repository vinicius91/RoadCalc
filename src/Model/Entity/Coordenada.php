<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coordenada Entity
 *
 * @property int $id
 * @property float $latitude
 * @property float $longitude
 * @property float $utm_x
 * @property float $utm_y
 * @property float $utm_z
 * @property string $utm_letter
 * @property int $utm_number
 * @property string $geom
 *
 * @property \App\Model\Entity\Estaca[] $estaca
 * @property \App\Model\Entity\PontoNotavelHorizontal[] $ponto_notavel_horizontal
 * @property \App\Model\Entity\PontoNotavelVerical[] $ponto_notavel_verical
 */
class Coordenada extends Entity
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
        'latitude' => true,
        'longitude' => true,
        'utm_x' => true,
        'utm_y' => true,
        'utm_z' => true,
        'utm_letter' => true,
        'utm_number' => true,
        'geom' => true,
        'estaca' => true,
        'ponto_notavel_horizontal' => true,
        'ponto_notavel_verical' => true
    ];
}
