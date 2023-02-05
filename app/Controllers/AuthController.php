<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        return view('auth/login', [
            'validation' =>  \Config\Services::validation()
        ]);
    }
    public function auth()
    {
        $rules = [
            'email'         => 'required',
            'password'      => 'required',
        ];
        if ($this->validate($rules)) {

            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $data = $this->userModel->where('email', $email)->first();

            if ($data) {
                $pw = $data->password;
                $auth = password_verify($password, $pw);
                if ($auth) {
                    $data = [
                        'id' => $data->id,
                        'username' => $data->username,
                        'email' => $data->email,
                        'isLoggedIn' => true
                    ];
                    session()->set($data);
                    return redirect()->to('/');
                } else {
                    session()->setFlashdata('message', 'Login invalid');
                    return redirect()->back()->withInput();
                }
            } else {
                session()->setFlashdata('message', 'Login Invalid');
                return redirect()->back()->withInput();
            }
        } else {
            $data['validation'] = $this->validator;
            return view('auth/login', $data);
        }
    }
    public function register()
    {
        // $data['validation'] = $this->validator;

        return view('auth/register', [
            'validation' =>  \Config\Services::validation()
        ]);
    }
    public function store()
    {
        $rules = [
            'username'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            // 'confirmpassword'  => 'matches[password]'
        ];
        if ($this->validate($rules)) {
            // dd($this->request->getVar());
            // $userModel = new UserModel();
            $data = [
                'username'     => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'created_at' => time()
            ];
            $this->userModel->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            return view('auth/register', $data);
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
