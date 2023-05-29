<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'nama'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
            'email'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]
 
		]);
		$this->forge->addKey('email', true);
		$this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
