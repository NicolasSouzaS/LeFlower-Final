<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EsteticaController extends Controller
{
    public function index(){
        return view('site.dashboard.funcionarios.estetica');
    }
}
