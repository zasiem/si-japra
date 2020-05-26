<?php namespace App\Database\Seeds;

class PracticalWorksSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $this->db->table('practical_works')->insert([
                  'name' => 'Gambung Store',
                ]);
                $this->db->table('practical_works')->insert([
                  'name' => 'Travedia',
                ]);
        }
}
