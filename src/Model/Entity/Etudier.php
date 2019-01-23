<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Etudier Entity
 *
 * @property int $id
 * @property int $etudiant_id
 * @property int $annee_scolaire_id
 * @property int $groupe_id
 * @property int $element_id
 *
 * @property \App\Model\Entity\Etudiant $etudiant
 * @property \App\Model\Entity\AnneeScolaire $annee_scolaire
 * @property \App\Model\Entity\Groupe $groupe
 * @property \App\Model\Entity\Element $element
 * @property \App\Model\Entity\Note[] $notes
 */
class Etudier extends Entity
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
        'etudiant_id' => true,
        'annee_scolaire_id' => true,
        'groupe_id' => true,
        'element_id' => true,
        'etudiant' => true,
        'annee_scolaire' => true,
        'groupe' => true,
        'element' => true,
        'notes' => true
    ];
}
