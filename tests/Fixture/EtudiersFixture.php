<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EtudiersFixture
 *
 */
class EtudiersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'etudiant_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'annee_scolaire_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'groupe_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'element_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'etudiers_etudiants_id_foreign' => ['type' => 'index', 'columns' => ['etudiant_id'], 'length' => []],
            'etudiers_annee_scolaires_id_foreign' => ['type' => 'index', 'columns' => ['annee_scolaire_id'], 'length' => []],
            'etudiers_classes_id_foreign' => ['type' => 'index', 'columns' => ['groupe_id'], 'length' => []],
            'etudiers_elements_id_foreign' => ['type' => 'index', 'columns' => ['element_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'etudiers_annee_scolaires_id_foreign' => ['type' => 'foreign', 'columns' => ['annee_scolaire_id'], 'references' => ['annee_scolaires', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'etudiers_classes_id_foreign' => ['type' => 'foreign', 'columns' => ['groupe_id'], 'references' => ['groupes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'etudiers_elements_id_foreign' => ['type' => 'foreign', 'columns' => ['element_id'], 'references' => ['elements', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'etudiers_etudiants_id_foreign' => ['type' => 'foreign', 'columns' => ['etudiant_id'], 'references' => ['etudiants', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'etudiant_id' => 1,
                'annee_scolaire_id' => 1,
                'groupe_id' => 1,
                'element_id' => 1
            ],
        ];
        parent::init();
    }
}
