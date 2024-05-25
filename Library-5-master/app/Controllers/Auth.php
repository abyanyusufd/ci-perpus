<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends Controller
{
    public function login()
    {
        // Jika form login disubmit
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $model = new UserModel();
            $user = $model->login($username, $password);

            if ($user) {
                // Login berhasil, lakukan sesuatu (misalnya: redirect ke halaman utama)
                return redirect()->to('/');
            } else {
                // Login gagal, tampilkan pesan error
                return redirect()->back()->withInput()->with('error', 'Username atau password salah.');
            }
        }

        // Tampilkan halaman login
        return view('login');
    }

    public function logout()
    {
        // Lakukan proses logout
        // Misalnya: unset session, dan redirect ke halaman login
    }
}
