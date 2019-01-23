<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Groupe Entity
 *
 * @property int $id
 * @property int $niveaus_id
 * @property int $filiere_id
 * @property string $photo_emploi
 *
 * @property \App\Model\Entity\Niveau $niveau
 * @property \App\Model\Entity\Filiere $filiere
 * @property \App\Model\Entity\AccessAdmi[] $access_admis
 * @property \App\Model\Entity\Autorisation[] $autorisations
 * @property \App\Model\Entity\Etudier[] $etudiers
 * @property \App\Model\Entity\Module[] $modules
 */
class Groupe extends Entity
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
        'niveaus_id' => true,
        'filiere_id' => true,
        'photo_emploi' => true,
        'niveau' => true,
        'filiere' => true,
        'access_admis' => true,
        'autorisations' => true,
        'etudiers' => true,
        'modules' => true
    ];
}
