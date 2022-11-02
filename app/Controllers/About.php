<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo "Controler About,Method Index"; 
        
        // return view('welcome_message');
    }
    
    public function contact($nama = "", $telp="")
    {
       echo "Controler About,Method Contact <br>";
       echo "Helo, Saya $nama. Silahkan hubungi saya di $telp";
        // return view('welcome_message');
    }
}