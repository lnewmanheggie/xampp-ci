<?php

namespace CodeIgniter;

use CodeIgniter\Test\ControllerTester;

class TestStudentController extends \CodeIgniter\Test\CIDatabaseTestCase
{
    use ControllerTester;

    public function testTrueAssertsToTrue() {
        $this->assertTrue(true);
    }
}