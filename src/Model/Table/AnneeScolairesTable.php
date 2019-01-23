<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AnneeScolaires Model
 *
 * @property \App\Model\Table\AutorisationsTable|\Cake\ORM\Association\HasMany $Autorisations
 * @property \App\Model\Table\EnseignersTable|\Cake\ORM\Association\HasMany $Enseigners
 * @property \App\Model\Table\EtudiersTable|\Cake\ORM\Association\HasMany $Etudiers
 *
 * @method \App\Model\Entity\AnneeScolaire get($primaryKey, $options = [])
 * @method \App\Model\Entity\AnneeScolaire newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AnneeScolaire[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AnneeScolaire|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AnneeScolaire|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AnneeScolaire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AnneeScolaire[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AnneeScolaire findOrCreate($search, callable $callback = null, $options = [])
 */
class AnneeScolairesTable extends Table
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

        $this->setTable('annee_scolaires');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Autorisations', [
            'foreignKey' => 'annee_scolaire_id'
        ]);
        $this->hasMany('Enseigners', [
            'foreignKey' => 'annee_scolaire_id'
        ]);
        $this->hasMany('Etudiers', [
            'foreignKey' => 'annee_scolaire_id'
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
            ->scalar('libile')
            ->maxLength('libile', 255)
            ->allowEmptyString('libile');

        $validator
            ->date('annee')
            ->requirePresence('annee', 'create')
            ->allowEmptyDate('annee', false);

        return $validator;
    }
}
