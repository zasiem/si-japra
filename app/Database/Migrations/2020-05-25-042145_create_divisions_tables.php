<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDivisionsTables extends Migration
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
			'practical_work_id' => [
				'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => TRUE,
			],
			'name' => [
				'type'           => 'VARCHAR',
        'constraint'     => '255',
			],
		]);
		$this->forge->addKey('id', TRUE);
    $this->forge->createTable('divisions');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('divisions');
	}
}
