<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddImageToPracticalWorksTable extends Migration
{
	public function up()
	{
		$this->db->query('ALTER TABLE `practical_works` ADD COLUMN image VARCHAR(255) AFTER name');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
