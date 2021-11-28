<?php

namespace App\Controllers\ccabang;
use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\mcabang\CabangModel;


class Cabang extends BaseController
{
    public function index()
    {
        $m_cabang = new CabangModel();
        $data['cabangs'] = $m_cabang->orderBy('id', 'DESC')->findAll();
        return view('vicabang/vcabang',$data);
    }
    // add user form
    public function create(){
        return view('add_user');
    }
 
    // insert data
    public function store() {
        $m_cabang = new CabangModel();
        $data = [
            'kode' => $this->request->getVar('kodecabang'),
            'nama'  => $this->request->getVar('namacabang'),
            'alamat'  => $this->request->getVar('alamatcabang'),
        ];
        $m_cabang->insert($data);
        return $this->response->redirect(base_url('/cabang'));
    }

    // show single cabang
    public function getCabangById($id = null){
        $m_cabang = new CabangModel();
        $data['cabang'] = $m_cabang->where('id', $id)->first();
        return  view('vicabang/veditcabang',$data);
    }

    // update cabang data
    public function update(){
        $m_cabang = new CabangModel();
        $id = $this->request->getVar('id');
        $data = [
            'kode' => $this->request->getVar('kodecabang'),
            'nama'  => $this->request->getVar('namacabang'),
            'alamat'  => $this->request->getVar('alamatcabang'),
        ];
        $m_cabang->update($id, $data);
        return $this->response->redirect(site_url('/cabang'));
    }
 
    // delete cabang
    public function delete($id = null){
        $m_cabang = new CabangModel();
        $data['cabang'] = $m_cabang->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/cabang'));
    }    
}
