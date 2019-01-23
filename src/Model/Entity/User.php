<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $role
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Asupprimer[] $asupprimer
 * @property \App\Model\Entity\DiffusionsMessage[] $diffusions_messages
 * @property \App\Model\Entity\Etudiant[] $etudiants
 * @property \App\Model\Entity\Fonctionnaire[] $fonctionnaires
 * @property \App\Model\Entity\Historiqueemprunte[] $historiqueemprunte
 * @property \App\Model\Entity\Messagesbureauordre[] $messagesbureauordres
 * @property \App\Model\Entity\NotificationsUser[] $notifications_users
 * @property \App\Model\Entity\Profpermanent[] $profpermanents
 * @property \App\Model\Entity\Profpermanentsbi[] $profpermanentsbis
 * @property \App\Model\Entity\Reservation[] $reservations
 * @property \App\Model\Entity\Vacataire[] $vacataires
 * @property \App\Model\Entity\Vacatairesbi[] $vacatairesbis
 * @property \App\Model\Entity\Book[] $books
 * @property \App\Model\Entity\Message[] $messages
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'role' => true,
        'created' => true,
        'modified' => true,
        'asupprimer' => true,
        'diffusions_messages' => true,
        'etudiants' => true,
        'fonctionnaires' => true,
        'historiqueemprunte' => true,
        'messagesbureauordres' => true,
        'notifications_users' => true,
        'profpermanents' => true,
        'profpermanentsbis' => true,
        'reservations' => true,
        'vacataires' => true,
        'vacatairesbis' => true,
        'books' => true,
        'messages' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
