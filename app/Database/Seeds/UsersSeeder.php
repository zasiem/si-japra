<?php namespace App\Database\Seeds;

class UsersSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $this->db->table('users')->insert([
                  'email' => 'admin@si-japra.com',
                  'nim' => 'admin@si-japra',
                  'password' => md5('erzagantengidaman'),
                  'name' => 'Admin SI - JAPRA',
                  'major' => 'S2 Teknik Nuklir',
                  'role' => 'admin'
                ]);
        }
}
