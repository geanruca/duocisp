<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    
    public function index()
    {
        $a = Empleado::All();
        return response()->json([
            "status"=>true,
            "data"=>$a
            ]);
    }

    public function store(Request $request, Empleado $tipo)
    {
        $tipo->nombre = $request->nombre;
        $tipo->rut = $request->rut;
        $tipo->categoria = $request->categoria;
        $tipo->save();
        return response()->json([
            'msg'=>'Guardado'
        ]);
    }

    public function update(Request $request, $id)
    {
        $u = Empleado::where('id',$id)->first();
        $u->nombre = $request->nombre;
        $u->rut = $request->rut;
        $u->categoria = $request->categoria;
        $u->save();

        return response()->json([
            'status'=>true,
            'msg'=>'guardado'
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $t=Empleado::where('id',$request->id)->first();
        $t->delete();
        
        return response()->json([
            'status' => true,
            'msg'    => 'Eliminado'
        ]);
    }
}
