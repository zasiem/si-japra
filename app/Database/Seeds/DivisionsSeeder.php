<?php namespace App\Database\Seeds;

class DivisionsSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $this->db->table('divisions')->insert([
                  'name' => 'UI & UX Engineer',
                  'practical_work_id' => 1,
                ]);
                $this->db->table('divisions')->insert([
                  'name' => 'Web Developer',
                  'practical_work_id' => 1,
                ]);
                $this->db->table('divisions')->insert([
                  'name' => 'Android Developer',
                  'practical_work_id' => 1,
                ]);

                $this->db->table('divisions')->insert([
                  'name' => 'UI & UX Designer',
                  'practical_work_id' => 2,
                ]);
                $this->db->table('divisions')->insert([
                  'name' => 'Software Engineer',
                  'practical_work_id' => 2,
                ]);
                $this->db->table('divisions')->insert([
                  'name' => 'Business Analyst',
                  'practical_work_id' => 2,
                ]);
                $this->db->table('divisions')->insert([
                  'name' => 'Marketing',
                  'practical_work_id' => 2,
                ]);
                $this->db->table('divisions')->insert([
                  'name' => 'Survey and System Analyst',
                  'practical_work_id' => 2,
                ]);
        }
}
