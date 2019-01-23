<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AnneeScolaire Entity
 *
 * @property int $id
 * @property string|null $libile
 * @property \Cake\I18n\FrozenDate $annee
 *
 * @property \App\Model\Entity\Autorisation[] $autorisations
 * @property \App\Model\Entity\Enseigner[] $enseigners
 * @property \App\Model\Entity\Etudier[] $etudiers
 */
class AnneeScolaire extends Entity
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
        'annee' => true,
        'autorisations' => true,
        'enseigners' => true,
        'etudiers' => true
    ];
}
