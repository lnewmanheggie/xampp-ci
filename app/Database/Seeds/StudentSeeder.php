<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
	public function run()
	{
        $student1 = [
            'first_name' => 'Mary',
            'last_name' => 'Smith',
            'email'    => 'mary@gmail.com',
            'password' => 123,
            'grade' => 12
        ];
        $student2 = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email'    => 'john@gmail.com',
            'password' => 1234,
            'grade' => 10
        ];
        $student3 = [
            'first_name' => 'Sally',
            'last_name' => 'Gold',
            'email'    => 'sally@gmail.com',
            'password' => 12356,
            'grade' => 9
        ];

        $this->db->table('student')->insert($student1);
        $this->db->table('student')->insert($student2);
        $this->db->table('student')->insert($student3);
	}
}
