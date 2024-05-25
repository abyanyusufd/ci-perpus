<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Library extends Controller{
    public function login()
    {
        return view('index');
    }
    public function home()
    {
        return view('pages/home');
    }
}