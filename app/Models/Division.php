<?php namespace App\Models;

use CodeIgniter\Model;

class Division extends Model
{

  protected $table = "divisions";
  protected $primaryKey = 'id';

  protected $allowedFields = [
    "practical_work_id",
    "name",
  ];

  protected $validationRules    = [
    "practical_work_id" => "required",
    "name" => "required",
  ];

  public function getAllDivisions()
  {
    $divisions = $this->select('divisions.*, practical_works.name as startup')
    ->join('practical_works', 'divisions.practical_work_id = practical_works.id')
    ->findAll();
    return $divisions;
  }

}
