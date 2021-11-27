<?php

namespace App\Controllers;
use App\Models\LoginModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
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
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            //$verify_pass = password_verify($password, $pass);
            if($password==$pass){
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
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
    function consolelog($data) {
        echo "<script>console.log('".$data."');</script>";
    }
}
