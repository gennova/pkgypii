<?php
namespace App\Models\munit;
use App\Controllers\BaseModel;
 
use CodeIgniter\Model;
 
class UnitModel extends Model{
    protected $table = 'unit';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kodeunit','namaunit','alamatunit','telpon','email'];
}