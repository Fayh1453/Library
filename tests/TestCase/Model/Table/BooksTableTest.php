<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BooksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BooksTable Test Case
 */
class BooksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BooksTable
     */
    public $Books;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.books',
        'app.genres',
        'app.users',
        'app.stocks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Books') ? [] : ['className' => BooksTable::class];
        $this->Books = TableRegistry::getTableLocator()->get('Books', $config);
    }
   public function testAuthentification()
    {
        $this->session([
            'Auth' => [
                'User' => [
                    'id' => 1,
                    'username' => 'Luc',
                    'email' => 'lr.infographie@gmail.com',
                    'password' => 'Admin',
                    'type' => 'manager',
                
                ]
            ]
        ]);
        $this->get('/books/add');
        $this->assertResponseOk();
    }
       public function testAuthentificationFails()
    {
        $this->get('/books/add');
        $this->assertRedirect(['controller' => 'Users', 'action' => 'login', 'redirect' => '/books/add']);
    }
    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Books);

        parent::tearDown();
    }
    
    public function testAdd()
    {
        $this->session([
            'Auth' => [
                'User' => [
               'id' => 1,
                    'username' => 'Luc',
                    'email' => 'lr.infographie@gmail.com',
                    'password' => 'Admin',
                    'type' => 'manager',
                ]
            ]
        ]);
        $this->get('/books/add');
        $this->assertResponseOk();
        $data = [
            'name' => 'test',
            'genre_id' => '1',
            'publication' => '2014-02-06'
        ];
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->post('/books/add', $data);
        $this->assertResponseSuccess();
        $mafias = TableRegistry::get('Books');
        $query = $mafias->find('all', ['conditions' =>['id' => $data['id']]]);
        $this->assertEquals(1, $query->count());
    }


    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
    
    
        public function testFindUserId()
    {
        $query = $this->Books->find('userId');
        $this->assertInstanceOf('Cake\ORM\Query', $query);
        $result = $query->hydrate(false)->toArray();
        $expected = [
            (int) 0 => [
                'id' => (int) 1,
                'name' => 'Lorem ipsum dolor sit amet',
                 'genre' => 'Lorem ipsum dolor sit amet',
                'user_id' => (int) 1
        ]
        ];
        $this->assertEquals($expected, $result);
    }
    
    
     public function testEdit()
    {
        $this->session([
  
          'Auth' => [
               'User' => [
               'id' => 1,
                    'username' => 'Luc',
                    'email' => 'lr.infographie@gmail.com',
                    'password' => 'Admin',
                    'type' => 'manager',
                ]
            ]
        ]);
        $this->get('/books/edit/1');
        $this->assertResponseOk();
        $data = [
            'name' => 'test',
            'genre_id' => '1',
            'publication' => '2014-02-06'
        ];
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->put('/books/edit/1', $data);
        $this->assertResponseSuccess();
        $mafias = TableRegistry::get('Books');
        $query = $books->find('all', ['condtions' =>['genre' => $data['genre']]]);
        $this->assertEquals(1, $query->count());
    }

    
      public function testDelete()
    {
        $this->session([
            'Auth' => [
                'User' => [
                    'id' => 1,
                    'username' => 'Luc',
                    'email' => 'lr.infographie@gmail.com',
                    'password' => 'Admin',
                    'type' => 'manager'
                ]
            ]
        ]);
        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->post('/books/delete/1');
        $mafias = TableRegistry::get('Books');
        $query = $books->find('all', ['condtions' =>['id' => ['id' => 1]]])->first();
        $this->assertEmpty($query);   
    }

}

