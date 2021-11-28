<?php

namespace App\Controllers\cunit;
use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\munit\UnitModel;


class Unit extends BaseController
{
    public function index()
    {
        $m_unit = new UnitModel();
        $data['units'] = $m_unit->orderBy('id', 'DESC')->findAll();
        return view('viunit/vunit',$data);
    }
    // add user form
    public function create(){
        return view('add_unit');
    }
 
    // insert data
    public function store() {
        $m_unit = new UnitModel();
        $data = [
            'kodeunit' => $this->request->getVar('kodeunit'),
            'namaunit'  => $this->request->getVar('namaunit'),
            'alamatunit'  => $this->request->getVar('alamatunit'),
            'telpon'  => $this->request->getVar('telpon'),
            'email'  => $this->request->getVar('email'),
        ];
        $m_unit->insert($data);
        return $this->response->redirect(base_url('/unit'));
    }

    // show single unit
    public function getUnitById($id = null){
        $m_unit = new UnitModel();
        $data['unit'] = $m_unit->where('id', $id)->first();
        return  view('viunit/vunitedit',$data);
    }

    // update unit data
    public function update(){
        $m_unit = new UnitModel();
        $id = $this->request->getVar('id');
        $data = [
            'kodeunit' => $this->request->getVar('kodeunit'),
            'namaunit'  => $this->request->getVar('namaunit'),
            'alamatunit'  => $this->request->getVar('alamatunit'),
            'telpon'  => $this->request->getVar('telpon'),
            'email'  => $this->request->getVar('email'),
        ];
        $m_unit->update($id, $data);
        return $this->response->redirect(site_url('/unit'));
    }
 
    // delete unit
    public function delete($id = null){
        $m_unit = new UnitModel();
        $data['unit'] = $m_unit->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/unit'));
    }    

}
