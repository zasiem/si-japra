<?php namespace App\Models;

use CodeIgniter\Model;

class Presence extends Model
{

  protected $table = 'presences';
  protected $primaryKey = 'id';

  protected $allowedFields = [
    "nim",
    "dones",
    "goals",
    "resistances",
    "evidences",
    "created_at",
    "is_late",
  ];

  protected $validationRules    = [
    "nim" => "required",
    "dones" => "required",
    "goals" => "required",
    "resistances" => "required",
    "evidences" => "required",
  ];

  public function getPresences($nim)
  {
		$presences = $this->where('nim', $nim)->findAll();
    return $presences;
  }

  public function getAllPresence()
  {
    $presences = $this->select('presences.*, practical_works.name as startup, divisions.name as division, users.name')
    ->join('users', 'users.nim = presences.nim')
    ->join('practical_works', 'users.practical_work_id = practical_works.id')
    ->join('divisions', 'users.division_id = divisions.id')
    ->findAll();
    return $presences;
  }

}
