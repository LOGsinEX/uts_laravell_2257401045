<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $nama = "Fahmi Fadhilah";
        $kelas = "MI22B";
        $nim = "2257401045";

        return view('welcome', compact('nama', 'kelas', 'nim'));
    }


    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        $nama = "Fahmi Fadhilah";
        $kelas = "MI22B";
        $nim = "2257401045";

        return view('dashboard', compact('nama', 'kelas', 'nim'));
    }
}
