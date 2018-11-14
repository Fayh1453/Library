<?php
use Migrations\AbstractSeed;

/**
 * User seed.
 */
class UserSeed extends AbstractSeed
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
                'id' => '4',
                'username' => 'Luc',
                'email' => 'lr.infographie@gmail.com',
                'password' => '$2y$10$2pvpDYAP3yS2IyDagZMCTe62b1.igopxohUcG3Ufr.xMk/paPpXCe',
                'created' => '2018-10-09 18:04:15',
                'modified' => '2018-10-09 18:04:15',
                'type' => 'manager',
            ],
            [
                'id' => '2',
                'username' => 'Bob',
                'email' => 'test@test.com',
                'password' => '$2y$10$2aeKiEP5MY.MbTiMAq1ZkuQh3qKGb4DbK8Aeayq.V94Wwt5PtI78a',
                'created' => '2018-10-09 18:19:26',
                'modified' => '2018-10-09 18:19:26',
                'type' => 'bibliothequere',
            ],
            [
                'id' => '3',
                'username' => 'Luc Roy',
                'email' => 'email@email.com',
                'password' => '$2y$10$MVBBa.V9kPut3h/Xzjn5qeKZ9BuFxF/SJtzz25435perx77zQxtTW',
                'created' => '2018-10-09 22:24:20',
                'modified' => '2018-10-09 22:24:20',
                'type' => 'manager',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
