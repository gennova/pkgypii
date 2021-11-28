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
        $db = \Config\Database::connect();
        log_message('info', 'Get all data guru');
        $query = $db->query("SELECT *,guru.id as idguru FROM guru JOIN cabang ON cabang.id=guru.idcabang JOIN unit ON unit.id=guru.idunit");
        //$query = $this->db->query('SELECT * FROM guru JOIN cabang ON cabang.id=guru.idcabang JOIN unit ON unit.id=guru.idunit');
        //$data['gurus'] = $m_guru->join('cabang','id','idcabang')->join('unit','id','idunit')->orderBy('id', 'DESC')->findAll();
        $data['gurus'] = $query->getResultArray();
        return view('gurudata/vguru',$data);
    }

    // insert data
    public function store() {
        $m_guru = new GuruModel();
        $data = [
            'namaguru' => $this->request->getVar('namaguru'),
            'idcabang'  => $this->request->getVar('cabang'),
            'idunit'  => $this->request->getVar('unit'),
            'level'  => $this->request->getVar('level'),
            'username'  => $this->request->getVar('username'),
            'password'  => md5($this->request->getVar('password')),
        ];
        $m_guru->insert($data);
        return $this->response->redirect(base_url('/guru'));
    }

    // show single guru
    public function getGuruById($id = null){
        $m_cabang = new CabangModel();
        $data['cabangs'] = $m_cabang->orderBy('id', 'DESC')->findAll();
        $m_unit = new UnitModel();
        $data['units'] = $m_unit->orderBy('id', 'DESC')->findAll();
        $m_guru = new GuruModel();
        $data['guru'] = $m_guru->where('id', $id)->first();
        return  view('editguru',$data);
    }

    // update cabang guru
    public function update(){
        $m_guru = new GuruModel();
        $id = $this->request->getVar('id');
        $data = [
            'namaguru' => $this->request->getVar('namaguru'),
            'idcabang'  => $this->request->getVar('cabang'),
            'idunit'  => $this->request->getVar('unit'),
            'level'  => $this->request->getVar('level'),
            'username'  => $this->request->getVar('username'),
            'password'  => md5($this->request->getVar('password')),
        ];
        $m_guru->update($id, $data);
        return $this->response->redirect(site_url('/guru'));
    }
 
    // delete guru
    public function delete($id = null){
        $m_guru = new GuruModel();
        $data['guru'] = $m_guru->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/guru'));
    }    

}
