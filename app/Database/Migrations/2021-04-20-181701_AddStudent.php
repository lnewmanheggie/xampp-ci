<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStudent extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'first_name' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => false,
			],
			'last_name' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => false,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true,
				'unique' => true,
			],
			'grade' => [
				'type' => 'INT',
				'constraint' => 2,
				'null' => false,
				'unique' => false,
			],
			'updated_at' => [
				'type' => 'datetime',
				'null' => true,
			],
			'created_at datetime default current_timestamp',
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('student');
	}

	public function down()
	{
		$this->forge->dropTable('student');
	}
}
