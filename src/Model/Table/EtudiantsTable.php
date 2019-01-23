<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Etudiants Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EtudiersTable|\Cake\ORM\Association\HasMany $Etudiers
 * @property \App\Model\Table\CertificatsTable|\Cake\ORM\Association\BelongsToMany $Certificats
 *
 * @method \App\Model\Entity\Etudiant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Etudiant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Etudiant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Etudiant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Etudiant|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Etudiant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Etudiant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Etudiant findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EtudiantsTable extends Table
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

        $this->setTable('etudiants');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Etudiers', [
            'foreignKey' => 'etudiant_id'
        ]);
        $this->belongsToMany('Certificats', [
            'foreignKey' => 'etudiant_id',
            'targetForeignKey' => 'certificat_id',
            'joinTable' => 'certificats_etudiants'
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
            ->scalar('apogee')
            ->maxLength('apogee', 50)
            ->allowEmptyString('apogee')
            ->add('apogee', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nom_fr')
            ->maxLength('nom_fr', 50)
            ->allowEmptyString('nom_fr');

        $validator
            ->scalar('nom_ar')
            ->maxLength('nom_ar', 50)
            ->allowEmptyString('nom_ar');

        $validator
            ->scalar('prenom_fr')
            ->maxLength('prenom_fr', 50)
            ->allowEmptyString('prenom_fr');

        $validator
            ->scalar('prenom_ar')
            ->maxLength('prenom_ar', 50)
            ->allowEmptyString('prenom_ar');

        $validator
            ->integer('cne')
            ->allowEmptyString('cne');

        $validator
            ->scalar('cin')
            ->maxLength('cin', 50)
            ->allowEmptyString('cin');

        $validator
            ->date('date_naissance')
            ->allowEmptyDate('date_naissance');

        $validator
            ->scalar('code_ville_naissance')
            ->maxLength('code_ville_naissance', 50)
            ->allowEmptyString('code_ville_naissance');

        $validator
            ->scalar('ville_naissance_fr')
            ->maxLength('ville_naissance_fr', 50)
            ->allowEmptyString('ville_naissance_fr');

        $validator
            ->scalar('ville_naissance_ar')
            ->maxLength('ville_naissance_ar', 50)
            ->allowEmptyString('ville_naissance_ar');

        $validator
            ->scalar('code_pays_naissance')
            ->maxLength('code_pays_naissance', 50)
            ->allowEmptyString('code_pays_naissance');

        $validator
            ->scalar('pays_naissance_fr')
            ->maxLength('pays_naissance_fr', 50)
            ->allowEmptyString('pays_naissance_fr');

        $validator
            ->scalar('pays_naissance_ar')
            ->maxLength('pays_naissance_ar', 50)
            ->allowEmptyString('pays_naissance_ar');

        $validator
            ->scalar('code_sexe')
            ->allowEmptyString('code_sexe');

        $validator
            ->scalar('sexe_fr')
            ->maxLength('sexe_fr', 50)
            ->allowEmptyString('sexe_fr');

        $validator
            ->scalar('sexe_ar')
            ->maxLength('sexe_ar', 50)
            ->allowEmptyString('sexe_ar');

        $validator
            ->scalar('code_adresse_fix')
            ->allowEmptyString('code_adresse_fix');

        $validator
            ->scalar('adresse_fix_fr')
            ->allowEmptyString('adresse_fix_fr');

        $validator
            ->scalar('adresse_fix_ar')
            ->allowEmptyString('adresse_fix_ar');

        $validator
            ->scalar('adresse_annulle_fr')
            ->allowEmptyString('adresse_annulle_fr');

        $validator
            ->scalar('adresse_annulle_ar')
            ->allowEmptyString('adresse_annulle_ar');

        $validator
            ->scalar('annee_1er_inscription_universite')
            ->maxLength('annee_1er_inscription_universite', 50)
            ->allowEmptyString('annee_1er_inscription_universite');

        $validator
            ->scalar('annee_1er_inscription_enseignement_superieur')
            ->maxLength('annee_1er_inscription_enseignement_superieur', 50)
            ->allowEmptyString('annee_1er_inscription_enseignement_superieur');

        $validator
            ->scalar('annee_1er_inscription_universite_marocaine')
            ->maxLength('annee_1er_inscription_universite_marocaine', 50)
            ->allowEmptyString('annee_1er_inscription_universite_marocaine');

        $validator
            ->scalar('code_bac')
            ->maxLength('code_bac', 50)
            ->allowEmptyString('code_bac');

        $validator
            ->scalar('serie_bac_fr')
            ->maxLength('serie_bac_fr', 50)
            ->allowEmptyString('serie_bac_fr');

        $validator
            ->scalar('serie_bac_ar')
            ->maxLength('serie_bac_ar', 50)
            ->allowEmptyString('serie_bac_ar');

        $validator
            ->scalar('code_etablissement_bac')
            ->maxLength('code_etablissement_bac', 50)
            ->allowEmptyString('code_etablissement_bac');

        $validator
            ->scalar('etablissement_bac_fr')
            ->maxLength('etablissement_bac_fr', 50)
            ->allowEmptyString('etablissement_bac_fr');

        $validator
            ->scalar('etablissement_bac_ar')
            ->maxLength('etablissement_bac_ar', 50)
            ->allowEmptyString('etablissement_bac_ar');

        $validator
            ->scalar('code_mention_bac')
            ->maxLength('code_mention_bac', 50)
            ->allowEmptyString('code_mention_bac');

        $validator
            ->scalar('mention_bac')
            ->maxLength('mention_bac', 50)
            ->allowEmptyString('mention_bac');

        $validator
            ->scalar('code_province_bac')
            ->maxLength('code_province_bac', 50)
            ->allowEmptyString('code_province_bac');

        $validator
            ->scalar('province_bac_fr')
            ->maxLength('province_bac_fr', 50)
            ->allowEmptyString('province_bac_fr');

        $validator
            ->scalar('province_bac_ar')
            ->maxLength('province_bac_ar', 50)
            ->allowEmptyString('province_bac_ar');

        $validator
            ->scalar('annee_bac')
            ->maxLength('annee_bac', 50)
            ->allowEmptyString('annee_bac');

        $validator
            ->scalar('code_type_handicap')
            ->maxLength('code_type_handicap', 50)
            ->allowEmptyString('code_type_handicap');

        $validator
            ->scalar('type_handicap')
            ->maxLength('type_handicap', 50)
            ->allowEmptyString('type_handicap');

        $validator
            ->scalar('code_type_hebergement')
            ->maxLength('code_type_hebergement', 50)
            ->allowEmptyString('code_type_hebergement');

        $validator
            ->scalar('type_hebergement')
            ->maxLength('type_hebergement', 50)
            ->allowEmptyString('type_hebergement');

        $validator
            ->scalar('code_situation_familiale')
            ->maxLength('code_situation_familiale', 50)
            ->allowEmptyString('code_situation_familiale');

        $validator
            ->scalar('situation_familiale')
            ->maxLength('situation_familiale', 50)
            ->allowEmptyString('situation_familiale');

        $validator
            ->scalar('situation_militaire')
            ->maxLength('situation_militaire', 50)
            ->allowEmptyString('situation_militaire');

        $validator
            ->scalar('categorie_socio_professionnelle')
            ->maxLength('categorie_socio_professionnelle', 50)
            ->allowEmptyString('categorie_socio_professionnelle');

        $validator
            ->scalar('domaine_activite_professionnelle')
            ->maxLength('domaine_activite_professionnelle', 50)
            ->allowEmptyString('domaine_activite_professionnelle');

        $validator
            ->scalar('quatite_Travaillee')
            ->maxLength('quatite_Travaillee', 50)
            ->allowEmptyString('quatite_Travaillee');

        $validator
            ->scalar('profession_pere_fr')
            ->maxLength('profession_pere_fr', 50)
            ->allowEmptyString('profession_pere_fr');

        $validator
            ->scalar('profession_pere_ar')
            ->maxLength('profession_pere_ar', 50)
            ->allowEmptyString('profession_pere_ar');

        $validator
            ->scalar('profession_mere_fr')
            ->maxLength('profession_mere_fr', 50)
            ->allowEmptyString('profession_mere_fr');

        $validator
            ->scalar('profession_mere_ar')
            ->maxLength('profession_mere_ar', 50)
            ->allowEmptyString('profession_mere_ar');

        $validator
            ->scalar('code_province_parents')
            ->maxLength('code_province_parents', 50)
            ->allowEmptyString('code_province_parents');

        $validator
            ->scalar('province_parents_fr')
            ->maxLength('province_parents_fr', 50)
            ->allowEmptyString('province_parents_fr');

        $validator
            ->scalar('province_parents_ar')
            ->maxLength('province_parents_ar', 50)
            ->allowEmptyString('province_parents_ar');

        $validator
            ->scalar('annee_sortie')
            ->maxLength('annee_sortie', 50)
            ->allowEmptyString('annee_sortie');

        $validator
            ->scalar('code_cite_universiatire')
            ->maxLength('code_cite_universiatire', 50)
            ->allowEmptyString('code_cite_universiatire');

        $validator
            ->scalar('cite_universiatire')
            ->maxLength('cite_universiatire', 50)
            ->allowEmptyString('cite_universiatire');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 100)
            ->allowEmptyString('photo');

        $validator
            ->integer('validi')
            ->allowEmptyString('validi');

        $validator
            ->integer('validi_respo')
            ->allowEmptyString('validi_respo');

        $validator
            ->scalar('numero_tel')
            ->maxLength('numero_tel', 600)
            ->allowEmptyString('numero_tel');

        $validator
            ->email('email')
            ->allowEmptyString('email');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['apogee']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
