<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $idFunc = session('id');
        $func   = Funcionario::find($idFunc);

        if(!$func){
            abort(404,'Funcionario não encontrado');
        }else{

        return view('site.dashboard.funcionarios.admin', compact('func'));
        }

    }
}
