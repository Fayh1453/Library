<?php
use Migrations\AbstractSeed;

/**
 * Adresses seed.
 */
class AdressesSeed extends AbstractSeed
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
                'city' => 'Laval',
                'street' => 'Geneva',
                'number' => '12',
                'zip' => 'H7N312',
                'created' => '2018-10-09 15:21:44',
                'modified' => '2018-10-09 15:21:44',
                'user_id' => '0',
            ],
            [
                'id' => '2',
                'city' => 'Montreal',
                'street' => 'Mont-Royal',
                'number' => '11',
                'zip' => 'H0H0H0',
                'created' => '2018-10-09 15:22:16',
                'modified' => '2018-10-11 22:41:28',
                'user_id' => '0',
            ],
            [
                'id' => '3',
                'city' => 'Laval',
                'street' => 'Concorde',
                'number' => '13',
                'zip' => 'H71N12',
                'created' => '2018-10-09 17:52:15',
                'modified' => '2018-10-09 17:52:15',
                'user_id' => '0',
            ],
            [
                'id' => '4',
                'city' => 'Laval',
                'street' => 'Geneva',
                'number' => '11',
                'zip' => 'H7N312',
                'created' => '2018-10-11 22:27:40',
                'modified' => '2018-10-11 22:27:40',
                'user_id' => '0',
            ],
            [
                'id' => '6',
                'city' => 'Laval',
                'street' => 'Geneva',
                'number' => '22',
                'zip' => 'H7N311',
                'created' => '2018-10-11 22:37:48',
                'modified' => '2018-10-11 22:38:04',
                'user_id' => '1',
            ],
        ];

        $table = $this->table('adresses');
        $table->insert($data)->save();
    }
}
