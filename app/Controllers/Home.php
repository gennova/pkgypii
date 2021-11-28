<?php

namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\mcabang\CabangModel;
use App\Models\munit\UnitModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function register()
    {
        $m_cabang = new CabangModel();
        $data['cabangs'] = $m_cabang->orderBy('id', 'DESC')->findAll();
        $m_unit = new UnitModel();
        $data['units'] = $m_unit->orderBy('id', 'DESC')->findAll();
        return view('register',$data);
    }
    
    public function homeadmin(){
        $session = session();
        return view('admin_home');
    }
    public function auth()
    {
        $session = session();
        $model = new LoginModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        log_message('info', 'User try login '.$username.' '.$password);
        $data = $model->where('username', $username)->first();
        if($data){
            $datapass = $model->where('PASSWORD=PASSWORD("'.$password.'")')->first();
            //$pass = $data['password'];
            //$verify_pass = password_verify($password, $pass);
            if($datapass){
                $ses_data = [
                    'user_id'       => $data['id'],
                    'namaguru'     => $data['namaguru'],
                    'username'    => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/home/homeadmin');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/home');
            }
        }else{
            $session->setFlashdata('msg', 'username not Found');
            return redirect()->to('/home');
        }
    }
 
    public function logout()
    {
        log_message('info', 'User logout session '.session()->get('namaguru'));
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
    function consolelog($data) {
        echo "<script>console.log('".$data."');</script>";
    }
}
