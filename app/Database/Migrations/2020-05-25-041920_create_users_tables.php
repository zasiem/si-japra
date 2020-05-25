<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTables extends Migration
{
	public function up()
	{
		$this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
      ],
      'email'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
        'unique'         => TRUE
      ],
      'nim' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
        'unique'         => TRUE
      ],
      'password' => [
        'type'           => 'VARCHAR',
        'constraint'     => '255'
      ],
      'name' => [
        'type'           => 'VARCHAR',
        'constraint'     => '255'
      ],
      'major' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100'
      ],
			'practical_work_id' => [
        'type'           => 'INT',
        'constraint'     => '11',
        'unsigned'       => TRUE,
				'null'					 => TRUE
      ],
      'division_id' => [
        'type'           => 'INT',
        'constraint'     => '11',
        'unsigned'       => TRUE,
				'null'					 => TRUE
      ],
			'role' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100',
				'default'					=> 'member'
      ],
      'is_active' => [
        'type'           => 'TINYINT',
        'constraint'     => '1',
        'default'        => 1
      ],
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
