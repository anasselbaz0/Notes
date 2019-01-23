<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notes Model
 *
 * @property \App\Model\Table\ElementsTable|\Cake\ORM\Association\BelongsTo $Elements
 * @property \App\Model\Table\EtudiersTable|\Cake\ORM\Association\BelongsTo $Etudiers
 * @property \App\Model\Table\PvupdateTable|\Cake\ORM\Association\HasMany $Pvupdate
 *
 * @method \App\Model\Entity\Note get($primaryKey, $options = [])
 * @method \App\Model\Entity\Note newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Note[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Note|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Note|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Note patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Note[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Note findOrCreate($search, callable $callback = null, $options = [])
 */
class NotesTable extends Table
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

        $this->setTable('notes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Elements', [
            'foreignKey' => 'element_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Etudiers', [
            'foreignKey' => 'etudier_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Pvupdate', [
            'foreignKey' => 'note_id'
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
            ->numeric('note')
            ->allowEmptyString('note');

        $validator
            ->numeric('note_ratt')
            ->allowEmptyString('note_ratt');

        $validator
            ->integer('confirmed')
            ->allowEmptyString('confirmed');

        $validator
            ->boolean('ratt_confirmed')
            ->requirePresence('ratt_confirmed', 'create')
            ->allowEmptyString('ratt_confirmed', false);

        $validator
            ->integer('saved')
            ->allowEmptyString('saved');

        $validator
            ->boolean('ratt_saved')
            ->requirePresence('ratt_saved', 'create')
            ->allowEmptyString('ratt_saved', false);

        $validator
            ->dateTime('created_at')
            ->requirePresence('created_at', 'create')
            ->allowEmptyDateTime('created_at', false);

        $validator
            ->dateTime('updated_at')
            ->requirePresence('updated_at', 'create')
            ->allowEmptyDateTime('updated_at', false);

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
        $rules->add($rules->existsIn(['element_id'], 'Elements'));
        $rules->add($rules->existsIn(['etudier_id'], 'Etudiers'));

        return $rules;
    }
}
