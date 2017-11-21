<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlUsu extends Controller
{
    public function permiso(){
        $usuario=$_POST['usuario'];
        $pass = \DB::table('usuPermitidos')->get('permiso')->where('nombreUsu',$usuario);
        if($pass==1){
            return view('respuesta');
        }else{
            return view('respuestados');
        }
    }
}
