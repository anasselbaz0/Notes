<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\AsupprimerTable|\Cake\ORM\Association\HasMany $Asupprimer
 * @property \App\Model\Table\DiffusionsMessagesTable|\Cake\ORM\Association\HasMany $DiffusionsMessages
 * @property \App\Model\Table\EtudiantsTable|\Cake\ORM\Association\HasMany $Etudiants
 * @property \App\Model\Table\FonctionnairesTable|\Cake\ORM\Association\HasMany $Fonctionnaires
 * @property \App\Model\Table\HistoriqueemprunteTable|\Cake\ORM\Association\HasMany $Historiqueemprunte
 * @property \App\Model\Table\MessagesbureauordresTable|\Cake\ORM\Association\HasMany $Messagesbureauordres
 * @property \App\Model\Table\NotificationsUsersTable|\Cake\ORM\Association\HasMany $NotificationsUsers
 * @property \App\Model\Table\ProfpermanentsTable|\Cake\ORM\Association\HasMany $Profpermanents
 * @property \App\Model\Table\ProfpermanentsbisTable|\Cake\ORM\Association\HasMany $Profpermanentsbis
 * @property \App\Model\Table\ReservationsTable|\Cake\ORM\Association\HasMany $Reservations
 * @property \App\Model\Table\VacatairesTable|\Cake\ORM\Association\HasMany $Vacataires
 * @property \App\Model\Table\VacatairesbisTable|\Cake\ORM\Association\HasMany $Vacatairesbis
 * @property \App\Model\Table\BooksTable|\Cake\ORM\Association\BelongsToMany $Books
 * @property \App\Model\Table\MessagesTable|\Cake\ORM\Association\BelongsToMany $Messages
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Asupprimer', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('DiffusionsMessages', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Etudiants', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Fonctionnaires', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Historiqueemprunte', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Messagesbureauordres', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('NotificationsUsers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Profpermanents', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Profpermanentsbis', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Reservations', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Vacataires', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Vacatairesbis', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Books', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'book_id',
            'joinTable' => 'users_books'
        ]);
        $this->belongsToMany('Messages', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'message_id',
            'joinTable' => 'users_messages'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 50)
            ->allowEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->scalar('role')
            ->maxLength('role', 20)
            ->allowEmptyString('role');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
