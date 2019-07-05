<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }
    public function registro(){
        return view('registro');
    }
    public function registro_empresa(){
        return view('registro_empresa');
    }
    public function registro_particular(){
        return view('registro_particular');
    }
    public function usuarios(){
        return view('usuarios');
    }
    public function muestras(){
        return view('muestras');
    }
    public function tipos_analisis(){
        return view('tipos_analisis');
    }
    public function empleados(){
        return view('empleados');
    }
    public function resultados(){
        return view('resultados');
    }
    public function recepcionista(){
        return view('recepcionista');
    }
    public function cliente(){
        return view('cliente');
    }
    public function cliente_muestras(){
        return view('cliente_muestras');
    }
    public function tecnico(){
        return view('tecnico');
    }
    public function tecnico_muestras(){
        return view('tecnico_muestras');
    }
}
