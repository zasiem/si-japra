<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddImageToPracticalWorksTable extends Migration
{
	public function up()
	{
		$this->db->query('ALTER TABLE `practical_works` ADD COLUMN image VARCHAR(255) AFTER name');
		$this->db->query('ALTER TABLE `practical_works` ADD COLUMN url VARCHAR(255) AFTER image');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		
	}
}
