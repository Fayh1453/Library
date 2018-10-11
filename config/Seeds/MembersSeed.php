<?php
use Migrations\AbstractSeed;

/**
 * Members seed.
 */
class MembersSeed extends AbstractSeed
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
                'adresse_id' => '1',
                'firstname' => 'Luc',
                'lastname' => 'Roy',
                'created' => '2018-10-09 17:47:53',
                'modified' => '2018-10-09 17:47:53',
                'user_id' => '0',
            ],
            [
                'id' => '3',
                'adresse_id' => '1',
                'firstname' => 'Luc',
                'lastname' => 'Roy',
                'created' => '2018-10-09 22:43:16',
                'modified' => '2018-10-11 22:59:24',
                'user_id' => '1',
            ],
        ];

        $table = $this->table('members');
        $table->insert($data)->save();
    }
}
