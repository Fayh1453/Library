<?php
use Migrations\AbstractSeed;

/**
 * Book seed.
 */
class BookSeed extends AbstractSeed
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
                'title' => 'Harry Potter and the order of the phoenix',
                'genre_id' => '1',
                'publication' => '2013-10-06',
                'created' => '2018-10-09 15:23:38',
                'modified' => '2018-11-13 20:07:43',
                'user_id' => '1',
            ],
            [
                'id' => '2',
                'title' => 'Game of thrones',
                'genre_id' => '2',
                'publication' => '2014-02-19',
                'created' => '2018-10-10 20:58:30',
                'modified' => '2018-10-10 20:58:30',
                'user_id' => '1',
            ],
            [
                'id' => '3',
                'title' => 'Alice in Wonderland',
                'genre_id' => '2',
                'publication' => '2013-04-10',
                'created' => '2018-10-10 20:58:56',
                'modified' => '2018-10-10 20:58:56',
                'user_id' => '3',
            ],
            [
                'id' => '4',
                'title' => 'Name of the wind',
                'genre_id' => '2',
                'publication' => '2018-10-10',
                'created' => '2018-10-10 21:00:25',
                'modified' => '2018-10-10 21:00:25',
                'user_id' => '2',
            ],
        ];

        $table = $this->table('books');
        $table->insert($data)->save();
    }
}
