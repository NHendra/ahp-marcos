<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'login';
    protected $allowedFields = ['username','password'];

    public function update_password($passwordbaru,$username)
    {
        $query = $this->db->table('login')->update(['password' => $this->hash_password($passwordbaru)], array('username' => $username));
        return $query;
    }
    private function hash_password($passwordbaru) {
        return password_hash($passwordbaru, PASSWORD_BCRYPT);
       }
}