<?php namespace App\Models;

use CodeIgniter\Model;

class PracticalWork extends Model
{

  protected $table = "practical_works";
  protected $primaryKey = 'id';

  protected $allowedFields = [
    "name",
    "image",
    'url',
  ];

  protected $validationRules    = [
    "name" => "required",
    "image" => "required",
    'url' => "required",
  ];

}
