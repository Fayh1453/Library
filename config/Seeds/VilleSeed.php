<?php
use Migrations\AbstractSeed;

/**
 * Ville seed.
 */
class VilleSeed extends AbstractSeed
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
                'name' => 'Laval',
            ],
            [
                'id' => '2',
                'name' => 'Montreal',
            ],
            [
                'id' => '3',
                'name' => 'Blainville',
            ],
            [
                'id' => '4',
                'name' => 'Longeuil',
            ],
        ];

        $table = $this->table('villes');
        $table->insert($data)->save();
    }
}
