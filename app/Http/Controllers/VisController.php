<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisController extends Controller
{
    public function acceuil(){
       
        return view('acceuil.acceuil') ;
    }
}
