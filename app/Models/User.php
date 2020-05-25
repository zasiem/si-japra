<?php namespace App\Models;
use CodeIgniter\Model;

class User extends Model
{
  protected $table = "users";
  protected $primaryKey = 'id';

  protected $allowedFields = [
    "email",
    "nim",
    "password",
    "repassword",
    "name",
    "major",
    "practical_work_id",
    "division_id",
  ];

  protected $validationRules    = [
    "email" => 'required|is_unique[users.email]',
    "nim" => 'required|numeric|is_unique[users.nim]',
    'password'  => 'required',
    'reconfirm' => 'required|matches[password]',
    "name" => 'required',
    "major" => 'required',
    "practical_work_id" => 'required',
    "division_id" => 'required',
  ];

  protected $validationMessages = [

  ];

}
