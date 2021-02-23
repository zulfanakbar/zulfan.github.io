<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo"Selamat Datang";
    }
    public function about(){
        echo "Moh. Zulfan Akbar - 1941720152";
    }
    public function articels($id){
        echo "Halaman Artikel dengan ID :" . $id;
    }
    
}