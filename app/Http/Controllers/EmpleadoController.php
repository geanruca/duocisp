<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    
    public function index()
    {
        $empleados = Empleado::all();
        return json()->response($empleados);
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    public function destroy(Empleado $empleado)
    {
        //
    }
}
