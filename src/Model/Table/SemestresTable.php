<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Semestres Model
 *
 * @property \App\Model\Table\NiveausTable|\Cake\ORM\Association\BelongsTo $Niveaus
 * @property \App\Model\Table\AutorisationsTable|\Cake\ORM\Association\HasMany $Autorisations
 * @property \App\Model\Table\EnseignersTable|\Cake\ORM\Association\HasMany $Enseigners
 * @property \App\Model\Table\ModulesTable|\Cake\ORM\Association\HasMany $Modules
 * @property \App\Model\Table\PreinscriptionsInfosTable|\Cake\ORM\Association\HasMany $PreinscriptionsInfos
 *
 * @method \App\Model\Entity\Semestre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Semestre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Semestre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Semestre|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Semestre|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Semestre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Semestre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Semestre findOrCreate($search, callable $callback = null, $options = [])
 */
class SemestresTable extends Table
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

        $this->setTable('semestres');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Niveaus', [
            'foreignKey' => 'niveaus_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Autorisations', [
            'foreignKey' => 'semestre_id'
        ]);
        $this->hasMany('Enseigners', [
            'foreignKey' => 'semestre_id'
        ]);
        $this->hasMany('Modules', [
            'foreignKey' => 'semestre_id'
        ]);
        $this->hasMany('PreinscriptionsInfos', [
            'foreignKey' => 'semestre_id'
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

        return $rules;
    }
}
