<?php
namespace App\Database;

use CodeIgniter\Test\CIDatabaseTestCase;

class DatabaseTest extends CIDatabaseTestCase
{
    protected $refresh  = false;
    protected $migrate = false;
//    protected $seed     = 'TestSeeder';
//    protected $basePath = 'tests/App/Database/';


    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSeeInUserDb() {
        $criteria = [
            'first_name' => 'test',
            'last_name' => 'test',
            'email'  => 'test@gmail.com',
        ];
        $this->seeInDatabase('user', $criteria);
    }

    public function testCanInsertRowInUserDb() {
        $data = [
            'first_name' => 'userTest1',
            'last_name' => 'test1',
            'email'  => 'usertest1@gmail.com',
        ];
        $hasInDb = $this->hasInDatabase('user', $data);
        $this->assertIsObject($hasInDb);
    }

    public function testCanGrabUser() {
        $first_name = $this->grabFromDatabase('user', 'first_name', ['email' => 'test@gmail.com']);
        $this->assertEquals('test', $first_name);
    }


}
