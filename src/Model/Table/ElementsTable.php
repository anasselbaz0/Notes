<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Elements Model
 *
 * @property \App\Model\Table\ModulesTable|\Cake\ORM\Association\BelongsTo $Modules
 * @property \App\Model\Table\EnseignersTable|\Cake\ORM\Association\HasMany $Enseigners
 * @property \App\Model\Table\EtudiersTable|\Cake\ORM\Association\HasMany $Etudiers
 * @property \App\Model\Table\NotesTable|\Cake\ORM\Association\HasMany $Notes
 *
 * @method \App\Model\Entity\Element get($primaryKey, $options = [])
 * @method \App\Model\Entity\Element newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Element[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Element|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Element|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Element patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Element[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Element findOrCreate($search, callable $callback = null, $options = [])
 */
class ElementsTable extends Table
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

        $this->setTable('elements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Modules', [
            'foreignKey' => 'module_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Enseigners', [
            'foreignKey' => 'element_id'
        ]);
        $this->hasMany('Etudiers', [
            'foreignKey' => 'element_id'
        ]);
        $this->hasMany('Notes', [
            'foreignKey' => 'element_id'
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
            ->scalar('code')
            ->maxLength('code', 255)
            ->requirePresence('code', 'create')
            ->allowEmptyString('code', false);

        $validator
            ->scalar('libile')
            ->maxLength('libile', 255)
            ->allowEmptyString('libile');

        $validator
            ->integer('CM')
            ->requirePresence('CM', 'create')
            ->allowEmptyString('CM', false);

        $validator
            ->integer('Eval')
            ->requirePresence('Eval', 'create')
            ->allowEmptyString('Eval', false);

        $validator
            ->integer('AP')
            ->requirePresence('AP', 'create')
            ->allowEmptyString('AP', false);

        $validator
            ->integer('TP')
            ->requirePresence('TP', 'create')
            ->allowEmptyString('TP', false);

        $validator
            ->integer('TD')
            ->requirePresence('TD', 'create')
            ->allowEmptyString('TD', false);

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
        $rules->add($rules->existsIn(['module_id'], 'Modules'));

        return $rules;
    }
}
