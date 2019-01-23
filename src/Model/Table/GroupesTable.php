<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Groupes Model
 *
 * @property \App\Model\Table\NiveausTable|\Cake\ORM\Association\BelongsTo $Niveaus
 * @property \App\Model\Table\FilieresTable|\Cake\ORM\Association\BelongsTo $Filieres
 * @property \App\Model\Table\AccessAdmisTable|\Cake\ORM\Association\HasMany $AccessAdmis
 * @property \App\Model\Table\AutorisationsTable|\Cake\ORM\Association\HasMany $Autorisations
 * @property \App\Model\Table\EtudiersTable|\Cake\ORM\Association\HasMany $Etudiers
 * @property \App\Model\Table\ModulesTable|\Cake\ORM\Association\HasMany $Modules
 *
 * @method \App\Model\Entity\Groupe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Groupe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Groupe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Groupe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Groupe|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Groupe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Groupe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Groupe findOrCreate($search, callable $callback = null, $options = [])
 */
class GroupesTable extends Table
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

        $this->setTable('groupes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Niveaus', [
            'foreignKey' => 'niveaus_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Filieres', [
            'foreignKey' => 'filiere_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('AccessAdmis', [
            'foreignKey' => 'groupe_id'
        ]);
        $this->hasMany('Autorisations', [
            'foreignKey' => 'groupe_id'
        ]);
        $this->hasMany('Etudiers', [
            'foreignKey' => 'groupe_id'
        ]);
        $this->hasMany('Modules', [
            'foreignKey' => 'groupe_id'
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
            ->scalar('photo_emploi')
            ->maxLength('photo_emploi', 255)
            ->requirePresence('photo_emploi', 'create')
            ->allowEmptyString('photo_emploi', false);

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
        $rules->add($rules->existsIn(['niveaus_id'], 'Niveaus'));
        $rules->add($rules->existsIn(['filiere_id'], 'Filieres'));

        return $rules;
    }
}
