<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function ir_home(){
        return view("usuario.index");
    }

    public function account(){
        $user = Auth()->user();
        if ($user->role == 0) {
            return view("usuario.index");
        } else if($user->role == 1){
            return view("administrador.inicioAdmin");
        }
       
    }

    
}
