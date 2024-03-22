<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function daftarmahasiswa(Request $request)
    {
        echo $request->user()->id."<br>";
        echo $request->user()->name."<br>";
        echo $request->user()->email."<br>";
        echo $request->user()->password."<br>";

        // dump(Auth::user());
    }

    public function tabelmahasiswa()
    {
        return view('halaman', ['title' => 'Tabel Mahasiswa']);
    }

    public function blogmahasiswa()
    {
        return view('halaman', ['title' => 'Blog Mahasiswa']);
    }
}
