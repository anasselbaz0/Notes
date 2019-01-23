<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Module Entity
 *
 * @property int $id
 * @property string|null $libile
 * @property int $groupe_id
 * @property int $semestre_id
 *
 * @property \App\Model\Entity\Groupe $groupe
 * @property \App\Model\Entity\Semestre $semestre
 * @property \App\Model\Entity\Element[] $elements
 */
class Module extends Entity
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
        'libile' => true,
        'groupe_id' => true,
        'semestre_id' => true,
        'groupe' => true,
        'semestre' => true,
        'elements' => true
    ];
}
