<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaPrincipalController extends Controller
{
    
   Public function index(){
    return view('welcome');
   }
}
