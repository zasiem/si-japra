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

}
