<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('v_login');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'username'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url());
            }else{
                $session->setFlashdata('msg', 'Password Salah');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Username Tidak Ditemukan');
            return redirect()->to('/login');
        }
    }

    public function ganti()
    {
        $session = session();
        $model = new UserModel();
        $username = $session->get('username');
        $passwordbaru = $this->request->getVar('passwordbaru');  
        $passwordlama = $this->request->getVar('passwordlama');
        $data = $model->where('username', $username)->first();
         
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($passwordlama, $pass);
            if($verify_pass){
                $model->update_password($passwordbaru,$username);
                $session->setFlashdata('bnr', 'Password Berhasil di ubah');
                return redirect()->to(base_url());
            }else{
                $session->setFlashdata('slh', 'Password Lama Salah');
                return redirect()->to(base_url());
            }
        }else{
            $session->setFlashdata('msg', 'Username Tidak Ditemukan');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
} 