<?php
use Migrations\AbstractSeed;

/**
 * Library seed.
 */
class LibrarySeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'adresse_id' => '2',
                'name' => 'Biblio Fun 2',
                'created' => '2018-10-09 17:48:25',
                'modified' => '2018-10-11 22:47:02',
                'user_id' => '0',
            ],
            [
                'id' => '2',
                'adresse_id' => '1',
                'name' => 'Emile Neligan',
                'created' => '2018-11-12 18:34:19',
                'modified' => '2018-11-12 18:34:19',
                'user_id' => '0',
            ],
        ];

        $table = $this->table('libraries');
        $table->insert($data)->save();
    }
}
