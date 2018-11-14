<?php
use Migrations\AbstractSeed;

/**
 * I18n seed.
 */
class I18nSeed extends AbstractSeed
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
                'locale' => 'fr_CA',
                'foreign_key' => '1',
                'field' => 'title',
                'content' => 'Harry Potter et la Coupe de feu',
				'model' => 'Books'
            ],
			[
                'id' => '2',
                'locale' => 'fr_CA',
                'foreign_key' => '2',
                'field' => 'title',
                'content' => 'Le Throne de fer',
				'model' => 'Books'
            ],
			[
                'id' => '3',
                'locale' => 'fr_CA',
                'foreign_key' => '3',
                'field' => 'title',
                'content' => 'Alice au Pays des Merveilles',
				'model' => 'Books'
            ], 
			[
                'id' => '4',
                'locale' => 'fr_CA',
                'foreign_key' => '4',
                'field' => 'title',
                'content' => 'Le Nom du Vent',
				'model' => 'Books'
            ],         
			[
                'id' => '5',
                'locale' => 'es',
                'foreign_key' => '1',
                'field' => 'title',
                'content' => 'Harry Potter Y La Orden Del Fenix',
				'model' => 'Books'
            ],        
			[
                'id' => '6',
                'locale' => 'es',
                'foreign_key' => '2',
                'field' => 'title',
                'content' => 'Juego de tronos',
				'model' => 'Books'
            ],         
			[
                'id' => '7',
                'locale' => 'es',
                'foreign_key' => '3',
                'field' => 'title',
                'content' => 'Alicia En El Pais de Las Maravillas',
				'model' => 'Books'
            ],
			[
                'id' => '8',
                'locale' => 'es',
                'foreign_key' => '4',
                'field' => 'title',
                'content' => 'El Nombre Del Viento',
				'model' => 'Books'
            ],
        ];

        $table = $this->table('i18n');
        $table->insert($data)->save();
    }
}
