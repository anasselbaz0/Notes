<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Note Entity
 *
 * @property int $id
 * @property int $element_id
 * @property int $etudier_id
 * @property float|null $note
 * @property float|null $note_ratt
 * @property int|null $confirmed
 * @property bool $ratt_confirmed
 * @property int|null $saved
 * @property bool $ratt_saved
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \App\Model\Entity\Element $element
 * @property \App\Model\Entity\Etudier $etudier
 * @property \App\Model\Entity\Pvupdate[] $pvupdate
 */
class Note extends Entity
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
        'element_id' => true,
        'etudier_id' => true,
        'note' => true,
        'note_ratt' => true,
        'confirmed' => true,
        'ratt_confirmed' => true,
        'saved' => true,
        'ratt_saved' => true,
        'created_at' => true,
        'updated_at' => true,
        'element' => true,
        'etudier' => true,
        'pvupdate' => true
    ];
}
