<?php

namespace App\Controllers\gurudata;
use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\mcabang\CabangModel;
use App\Models\munit\UnitModel;
use App\Models\mguru\GuruModel;

class Guru extends BaseController
{
    public function index()
    {
        log_message('info', 'Get all data guru');
        $m_guru = new GuruModel();
        $data['gurus'] = $m_guru->join('cabang','id','idcabang')->join('unit','id','idunit')->orderBy('id', 'DESC')->findAll();
        return view('gurudata/vguru',$data);
    }

}
