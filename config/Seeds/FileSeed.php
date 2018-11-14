<?php
use Migrations\AbstractSeed;

/**
 * File seed.
 */
class FileSeed extends AbstractSeed
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
                'name' => 'harry.jpg',
                'path' => 'Files/',
                'created' => '2018-10-11 21:41:07',
                'modified' => '2018-10-11',
            ],
            [
                'id' => '2',
                'name' => 'name.jpg',
                'path' => 'Files/',
                'created' => '2018-10-11 21:51:06',
                'modified' => '2018-10-11',
            ],
            [
                'id' => '3',
                'name' => 'alice.jpg',
                'path' => 'Files/',
                'created' => '2018-10-11 21:51:52',
                'modified' => '2018-10-11',
            ],
        ];

        $table = $this->table('files');
        $table->insert($data)->save();
    }
}
