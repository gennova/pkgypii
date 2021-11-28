<?php
namespace App\Models\mguru;
use App\Controllers\BaseModel;
 
use CodeIgniter\Model;
 
class GuruModel extends Model{
    protected $table = 'guru';
    protected $primaryKey = 'id';
    protected $allowedFields = ['namaguru','idcabang','idunit','level','username','password','create'];
}