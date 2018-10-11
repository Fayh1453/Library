<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilesBookTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilesBookTable Test Case
 */
class FilesBookTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FilesBookTable
     */
    public $FilesBook;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.files_book',
        'app.books',
        'app.files'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FilesBook') ? [] : ['className' => FilesBookTable::class];
        $this->FilesBook = TableRegistry::getTableLocator()->get('FilesBook', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FilesBook);

        parent::tearDown();
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
}
