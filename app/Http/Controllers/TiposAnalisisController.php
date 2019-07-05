<?php

namespace App\Http\Controllers;

use App\Tipos_analisis;
use Illuminate\Http\Request;

class TiposAnalisisController extends Controller
{
    // CRUD Del administrador
    public function index()
    {
        $a = Tipos_analisis::All();
        return response()->json([
            "status"=>true,
            "data"=>$a
            ]);
    }

    public function store(Request $request, Tipos_analisis $tipo)
    {
        $tipo->nombre = $request->nombre;
        $tipo->save();
        return response()->json([
            'msg'=>'Guardado'
        ]);
    }

    public function update(Request $request, $id)
    {
        $u = Tipos_analisis::where('id',$id)->first();
        $u->nombre = $request->nombre;
        $u->save();

        return response()->json([
            'status'=>true,
            'msg'=>'guardado'
        ]);

    }

    public function destroy(Request $request, $id)
    {
        $t=Tipos_analisis::where('id',$request->id)->first();
        $t->delete();
        
        return response()->json([
            'status' => true,
            'msg'    => 'Eliminado'
        ]);
    }
}
