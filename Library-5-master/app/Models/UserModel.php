<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email'];

    // Tambahkan metode untuk login
    public function login($username, $password)
    {
        $user = $this->where('username', $username)
                     ->where('password', $password)
                     ->first();

        return $user;
    }
}