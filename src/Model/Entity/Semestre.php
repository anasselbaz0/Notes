<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Semestre Entity
 *
 * @property int $id
 * @property string|null $libile
 * @property int $niveaus_id
 *
 * @property \App\Model\Entity\Niveau $niveau
 * @property \App\Model\Entity\Autorisation[] $autorisations
 * @property \App\Model\Entity\Enseigner[] $enseigners
 * @property \App\Model\Entity\Module[] $modules
 * @property \App\Model\Entity\PreinscriptionsInfo[] $preinscriptions_infos
 */
class Semestre extends Entity
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
        'niveaus_id' => true,
        'niveau' => true,
        'autorisations' => true,
        'enseigners' => true,
        'modules' => true,
        'preinscriptions_infos' => true
    ];
}
