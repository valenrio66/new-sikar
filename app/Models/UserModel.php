<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "email";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'password'];

    public function getUser($email = null)
    {
        if ($email === null) {
            return $this->findAll();
        } else {
            return $this->where('email', $email)->findAll();
        }
    }
}
