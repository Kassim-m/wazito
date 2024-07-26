<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $allowedFields = ['username', 'password'];


    public function insertUser($data)
    {
        $this->protect(false)->insert($data);
        return $this->insertID();
    }
 
    public function verifyCredentials($username, $password)
    {
    
        $query = $this->select('password')->where('username', $username)->get();

        if ($query->getNumRows() > 0) {
            $user = $query->getRow();
            $storedPassword = $user->password;

            if (password_verify($password, $storedPassword)) {
              
                return true;
            }
        }

     
        return false;
    }
}





