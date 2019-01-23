<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GroupesFixture
 *
 */
class GroupesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'niveaus_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'filiere_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'photo_emploi' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'classes_niveaus_id_foreign' => ['type' => 'index', 'columns' => ['niveaus_id'], 'length' => []],
            'classes_filiere_id_foreign' => ['type' => 'index', 'columns' => ['filiere_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'classes_filieres_id_foreign' => ['type' => 'foreign', 'columns' => ['filiere_id'], 'references' => ['filieres', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'classes_niveaus_id_foreign' => ['type' => 'foreign', 'columns' => ['niveaus_id'], 'references' => ['niveaus', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'niveaus_id' => 1,
                'filiere_id' => 1,
                'photo_emploi' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
