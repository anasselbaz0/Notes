<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Etudiant Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $apogee
 * @property string|null $nom_fr
 * @property string|null $nom_ar
 * @property string|null $prenom_fr
 * @property string|null $prenom_ar
 * @property int|null $cne
 * @property string|null $cin
 * @property \Cake\I18n\FrozenDate|null $date_naissance
 * @property string|null $code_ville_naissance
 * @property string|null $ville_naissance_fr
 * @property string|null $ville_naissance_ar
 * @property string|null $code_pays_naissance
 * @property string|null $pays_naissance_fr
 * @property string|null $pays_naissance_ar
 * @property string|null $code_sexe
 * @property string|null $sexe_fr
 * @property string|null $sexe_ar
 * @property string|null $code_adresse_fix
 * @property string|null $adresse_fix_fr
 * @property string|null $adresse_fix_ar
 * @property string|null $adresse_annulle_fr
 * @property string|null $adresse_annulle_ar
 * @property string|null $annee_1er_inscription_universite
 * @property string|null $annee_1er_inscription_enseignement_superieur
 * @property string|null $annee_1er_inscription_universite_marocaine
 * @property string|null $code_bac
 * @property string|null $serie_bac_fr
 * @property string|null $serie_bac_ar
 * @property string|null $code_etablissement_bac
 * @property string|null $etablissement_bac_fr
 * @property string|null $etablissement_bac_ar
 * @property string|null $code_mention_bac
 * @property string|null $mention_bac
 * @property string|null $code_province_bac
 * @property string|null $province_bac_fr
 * @property string|null $province_bac_ar
 * @property string|null $annee_bac
 * @property string|null $code_type_handicap
 * @property string|null $type_handicap
 * @property string|null $code_type_hebergement
 * @property string|null $type_hebergement
 * @property string|null $code_situation_familiale
 * @property string|null $situation_familiale
 * @property string|null $situation_militaire
 * @property string|null $categorie_socio_professionnelle
 * @property string|null $domaine_activite_professionnelle
 * @property string|null $quatite_Travaillee
 * @property string|null $profession_pere_fr
 * @property string|null $profession_pere_ar
 * @property string|null $profession_mere_fr
 * @property string|null $profession_mere_ar
 * @property string|null $code_province_parents
 * @property string|null $province_parents_fr
 * @property string|null $province_parents_ar
 * @property string|null $annee_sortie
 * @property string|null $code_cite_universiatire
 * @property string|null $cite_universiatire
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $photo
 * @property int|null $validi
 * @property int|null $validi_respo
 * @property string|null $numero_tel
 * @property string|null $email
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Etudier[] $etudiers
 * @property \App\Model\Entity\Certificat[] $certificats
 */
class Etudiant extends Entity
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
        'user_id' => true,
        'apogee' => true,
        'nom_fr' => true,
        'nom_ar' => true,
        'prenom_fr' => true,
        'prenom_ar' => true,
        'cne' => true,
        'cin' => true,
        'date_naissance' => true,
        'code_ville_naissance' => true,
        'ville_naissance_fr' => true,
        'ville_naissance_ar' => true,
        'code_pays_naissance' => true,
        'pays_naissance_fr' => true,
        'pays_naissance_ar' => true,
        'code_sexe' => true,
        'sexe_fr' => true,
        'sexe_ar' => true,
        'code_adresse_fix' => true,
        'adresse_fix_fr' => true,
        'adresse_fix_ar' => true,
        'adresse_annulle_fr' => true,
        'adresse_annulle_ar' => true,
        'annee_1er_inscription_universite' => true,
        'annee_1er_inscription_enseignement_superieur' => true,
        'annee_1er_inscription_universite_marocaine' => true,
        'code_bac' => true,
        'serie_bac_fr' => true,
        'serie_bac_ar' => true,
        'code_etablissement_bac' => true,
        'etablissement_bac_fr' => true,
        'etablissement_bac_ar' => true,
        'code_mention_bac' => true,
        'mention_bac' => true,
        'code_province_bac' => true,
        'province_bac_fr' => true,
        'province_bac_ar' => true,
        'annee_bac' => true,
        'code_type_handicap' => true,
        'type_handicap' => true,
        'code_type_hebergement' => true,
        'type_hebergement' => true,
        'code_situation_familiale' => true,
        'situation_familiale' => true,
        'situation_militaire' => true,
        'categorie_socio_professionnelle' => true,
        'domaine_activite_professionnelle' => true,
        'quatite_Travaillee' => true,
        'profession_pere_fr' => true,
        'profession_pere_ar' => true,
        'profession_mere_fr' => true,
        'profession_mere_ar' => true,
        'code_province_parents' => true,
        'province_parents_fr' => true,
        'province_parents_ar' => true,
        'annee_sortie' => true,
        'code_cite_universiatire' => true,
        'cite_universiatire' => true,
        'created' => true,
        'modified' => true,
        'photo' => true,
        'validi' => true,
        'validi_respo' => true,
        'numero_tel' => true,
        'email' => true,
        'user' => true,
        'etudiers' => true,
        'certificats' => true
    ];
}
