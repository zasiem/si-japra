<?php

class User extends CI_Model
{
  private $_table = "users";

  public function login(){
    $post = $this->input->post();

    // cari user berdasarkan nim
    $this->db->where('nim', $post["nim"]);
    $user = $this->db->get($this->_table)->row();

    // jika user terdaftar
    if($user){
      // periksa password-nya
      $isPasswordTrue = password_verify($post["password"], $user->password);
      // periksa role-nya
      $isAdmin = $user->role == "admin";

      // jika password benar dan dia admin
      if($isPasswordTrue && $isAdmin){
        return true;
      }
    }

    // login gagal
    return false;
  }

}
