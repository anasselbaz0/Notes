<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Etudiers Model
 *
 * @property \App\Model\Table\EtudiantsTable|\Cake\ORM\Association\BelongsTo $Etudiants
 * @property \App\Model\Table\AnneeScolairesTable|\Cake\ORM\Association\BelongsTo $AnneeScolaires
 * @property \App\Model\Table\GroupesTable|\Cake\ORM\Association\BelongsTo $Groupes
 * @property \App\Model\Table\ElementsTable|\Cake\ORM\Association\BelongsTo $Elements
 * @property \App\Model\Table\NotesTable|\Cake\ORM\Association\HasMany $Notes
 *
 * @method \App\Model\Entity\Etudier get($primaryKey, $options = [])
 * @method \App\Model\Entity\Etudier newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Etudier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Etudier|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Etudier|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Etudier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Etudier[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Etudier findOrCreate($search, callable $callback = null, $options = [])
 */
class EtudiersTable extends Table
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

        $this->setTable('etudiers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Etudiants', [
            'foreignKey' => 'etudiant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AnneeScolaires', [
            'foreignKey' => 'annee_scolaire_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Groupes', [
            'foreignKey' => 'groupe_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Elements', [
            'foreignKey' => 'element_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Notes', [
            'foreignKey' => 'etudier_id'
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
        $rules->add($rules->existsIn(['etudiant_id'], 'Etudiants'));
        $rules->add($rules->existsIn(['annee_scolaire_id'], 'AnneeScolaires'));
        $rules->add($rules->existsIn(['groupe_id'], 'Groupes'));
        $rules->add($rules->existsIn(['element_id'], 'Elements'));

        return $rules;
    }
}
