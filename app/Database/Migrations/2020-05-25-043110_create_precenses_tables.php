<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePrecensesTables extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE
			],
			'nim' => [
        'type'           => 'VARCHAR',
        'constraint'     => '100'
      ],
			'dones' => [
				'type'           => 'TEXT'
			],
			'goals' => [
				'type'           => 'TEXT'
			],
			'resistances' => [
				'type'           => 'TEXT'
			],
			'evidences' => [
				'type'           => 'TEXT'
			],
			'is_late' => [
				'type'           => 'TINYINT',
				'constraint'     => '1',
				'default'				 => 0
			],
			'created_at' => [
				'type'           => 'TIMESTAMP'
			]
		]);
		$this->forge->addKey('id', TRUE);
    $this->forge->createTable('precenses');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('precenses');
	}
}
