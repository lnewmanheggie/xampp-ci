<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
        $user1 = [
            'first_name' => 'Laura',
            'last_name' => 'Watt',
            'email'    => 'laura@gmail.com',
            'password' => 'hello',
        ];
        $user2 = [
            'first_name' => 'Jake',
            'last_name' => 'Day',
            'email'    => 'jake@gmail.com',
            'password' => 'salad',
        ];
        $user3 = [
            'first_name' => 'Sarah',
            'last_name' => 'Gulp',
            'email'    => 'sarah@gmail.com',
            'password' => 'silly',
        ];

        $this->db->table('user')->insert($user1);
        $this->db->table('user')->insert($user2);
        $this->db->table('user')->insert($user3);
	}
}
