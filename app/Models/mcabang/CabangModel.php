<?php
namespace App\Models\mcabang;
use App\Controllers\BaseModel;
 
use CodeIgniter\Model;
 
class CabangModel extends Model{
    protected $table = 'cabang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode','nama','alamat'];
}