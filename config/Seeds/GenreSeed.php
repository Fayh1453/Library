<?php
use Migrations\AbstractSeed;

/**
 * Genre seed.
 */
class GenreSeed extends AbstractSeed
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
                'name' => 'horreur',
            ],
            [
                'id' => '2',
                'name' => 'fantasy',
            ],
            [
                'id' => '3',
                'name' => 'romance',
            ],
            [
                'id' => '4',
                'name' => 'science-fiction',
            ],
        ];

        $table = $this->table('genres');
        $table->insert($data)->save();
    }
}
