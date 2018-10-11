<?php
use Migrations\AbstractSeed;

/**
 * Stocks seed.
 */
class StocksSeed extends AbstractSeed
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
                'librarie_id' => '1',
                'book_id' => '1',
                'copy' => '3',
                'user_id' => '0',
            ],
            [
                'id' => '3',
                'librarie_id' => '1',
                'book_id' => '1',
                'copy' => '442',
                'user_id' => '1',
            ],
        ];

        $table = $this->table('stocks');
        $table->insert($data)->save();
    }
}
