<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuariosModel;//importar el modelo de usuarios 

class UsuariosController extends Controller
{
    function Mostrar(){
        $Usuarios=UsuariosModel::all();
        return view('welcome')->With(compact('Usuarios'));
    }
}
