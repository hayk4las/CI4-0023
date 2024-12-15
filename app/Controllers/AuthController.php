<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class AuthController extends BaseController
{
    // public function index(): string
    // {
    //     return view('home');
    // }
    public function login()
    {
        // Ambil konfigurasi Auth (jika dibutuhkan untuk view register)
        $data = array(
            'tittle'=> 'login',
        );
        return view('login',$data);
    }

    public function cek_login()
{
    if ($this->validate([
        'email' => [
            'rules' => 'required|valid_email|max_length[100]',
            'errors' => [
                'required' => 'Email wajib diisi tidak boleh kosong!',
                'valid_email' => 'Email tidak valid!',
                'max_length' => 'Email maksimal 100 karakter!',
            ],
        ],
        'password' => [
            'rules' => 'required|min_length[8]',
            'errors' => [
                'required' => 'Password wajib diisi tidak boleh kosong!',
                'min_length' => 'Password minimal 8 karakter!',
            ],
        ],
    ])) {
        // Jika validasi berhasil
        return redirect()->to('/profile');
    } else {
        // Jika validasi gagal
        return redirect()->back()->withInput()->with('validation', $this->validator);
    }
}

    public function register()
    {
        // Ambil konfigurasi Auth (jika dibutuhkan untuk view register)
        
        // Kirimkan konfigurasi ke view
        return view('auth/register');
    }
    
    
}