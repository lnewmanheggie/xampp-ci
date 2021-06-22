<?php

namespace CodeIgniter;

use CodeIgniter\Test\ControllerTester;

class TestStudentController extends \CodeIgniter\Test\CIDatabaseTestCase
{
    use ControllerTester;

    public function testViewStudent() {

        $result = $this->withURI('http://localhost:8080/students')
            ->controller(\App\Controllers\Student::class)
            ->execute('view');

        $this->assertTrue($result->isOK());
    }
}