<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePracticalWorksTables extends Migration
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
			'name' => [
				'type'           => 'VARCHAR',
        'constraint'     => '255',
			],
		]);
		$this->forge->addKey('id', TRUE);
    $this->forge->createTable('practical_works');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('practical_works');
	}
}
