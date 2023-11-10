<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product ;

class VisController extends Controller
{
    public function acceuil(){
        $product = Product::paginate(3) ;      
        return view('acceuil.acceuil', compact('product')) ;
       
       
    }
}
