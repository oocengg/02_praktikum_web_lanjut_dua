<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        echo "------ Tentang Saya ------ <br>";
        echo "NIM   : 2041720022 <br>";
        echo "Nama  : Muh. Fauzi Ramadhan Nugraha <br>";
        echo "Kelas : TI-2B";
    }
}
