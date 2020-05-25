<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRelationsTables extends Migration
{
	public function up()
	{
		$this->db->query('ALTER TABLE `users` ADD CONSTRAINT FK_users_practical_work_id FOREIGN KEY(`practical_work_id`) REFERENCES `practical_works`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;');
		$this->db->query('ALTER TABLE `users` ADD CONSTRAINT FK_users_division_id FOREIGN KEY(`division_id`) REFERENCES `divisions`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;');

		$this->db->query('ALTER TABLE `divisions` ADD CONSTRAINT FK_divisions_practical_work_id FOREIGN KEY(`practical_work_id`) REFERENCES `practical_works`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;');

		$this->db->query('ALTER TABLE `precenses` ADD CONSTRAINT FK_precenses_nim FOREIGN KEY(`nim`) REFERENCES `users`(`nim`) ON DELETE CASCADE ON UPDATE CASCADE;');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->db->query('ALTER TABLE `users` DROP FOREIGN KEY FK_users_practical_work_id;');
		$this->db->query('ALTER TABLE `users` DROP FOREIGN KEY FK_users_division_id;');

		$this->db->query('ALTER TABLE `divisions` DROP FOREIGN KEY FK_divisions_practical_work_id;');

		$this->db->query('ALTER TABLE `precenses` DROP FOREIGN KEY FK_precenses_nim;');
	}
}
