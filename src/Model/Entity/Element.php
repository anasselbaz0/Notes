<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Element Entity
 *
 * @property int $id
 * @property string $code
 * @property string|null $libile
 * @property int $module_id
 * @property int $CM
 * @property int $Eval
 * @property int $AP
 * @property int $TP
 * @property int $TD
 *
 * @property \App\Model\Entity\Module $module
 * @property \App\Model\Entity\Enseigner[] $enseigners
 * @property \App\Model\Entity\Etudier[] $etudiers
 * @property \App\Model\Entity\Note[] $notes
 */
class Element extends Entity
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
        'code' => true,
        'libile' => true,
        'module_id' => true,
        'CM' => true,
        'Eval' => true,
        'AP' => true,
        'TP' => true,
        'TD' => true,
        'module' => true,
        'enseigners' => true,
        'etudiers' => true,
        'notes' => true
    ];
}
