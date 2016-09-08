<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActionUsuario Entity
 *
 * @property int $idaction_usuario
 * @property int $usuarios_idusuarios
 * @property int $makers_idmakers
 * @property int $like_dislike
 */
class ActionUsuario extends Entity
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
        '*' => true,
        'idaction_usuario' => true,
        'usuarios_idusuarios' => true,
        'makers_idmakers' => true
    ];
}
