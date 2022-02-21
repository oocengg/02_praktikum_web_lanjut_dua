<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "------ Tentang Saya ------ <br>";
        echo "NIM   : 2041720022 <br>";
        echo "Nama  : Muh. Fauzi Ramadhan Nugraha <br>";
        echo "Kelas : TI-2B";
    }

    public function articles($id){
        echo "Ini merupakan halaman artikel dengan ID : " . $id;
    }
}
