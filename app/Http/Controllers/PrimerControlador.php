<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    //
    function index()  {
        return view('contact', ['name' => 'luis']);
        
    }
        function otro($POST, $otro)  {
            echo $POST;
            echo $otro;
        
    }
}
