<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class LoginModel extends Model{
    protected $table = 'guru';
    protected $allowedFields = ['namaguru','idcabang','idunit','level','username','password'];
}