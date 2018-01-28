<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PontoNotavelHorizontal Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $coordenada_id
 * @property int $projeto_id
 *
 * @property \App\Model\Entity\Coordenada $coordenada
 * @property \App\Model\Entity\Projeto $projeto
 */
class PontoNotavelHorizontal extends Entity
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
        'coordenada_id' => true,
        'projeto_id' => true,
        'coordenada' => true,
        'projeto' => true
    ];
}
