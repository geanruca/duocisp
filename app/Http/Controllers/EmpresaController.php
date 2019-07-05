<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Contacto;
use App\Tipos_analisis;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    
    public function index()
    {
        $empresa = Empresa::join('empresas','id','=','contacto.id_empresa')->get();
        $tipo_analisis = Tipos_analisis::All();
        return response()->json([
            "status"         => true,
            "empresa"        => $empresa
            ]);
    }

    public function store(Request $request, Empresa $empesa, Contacto $contacto)
    {
        $empesa->nombre = $request->nombre;
        $empesa->rut = $request->rut;
        $empesa->direccion = $request->direccion;
        $empesa->save();
        
        $contacto->nombre = $request->nombre_contacto;
        $contacto->rut = $request->rut_contacto;
        $contacto->direccion = $request->direccion_contacto;
        $contacto->email = $request->email_contacto;
        $contacto->telefono_contacto = $request->telefono_contacto;
        $contacto->save();

        return response()->json([
            'msg'=>'Guardado'
        ]);
    }

    public function update(Request $request, $id)
    {
        $u = Empresa::where('email',$request->email_contacto)->first();
        $u->nombre = $request->nombre;
        $u->rut = $request->rut;
        $u->direccion = $request->direccion;
        $u->save();

        $c = Contacto::where('id',$request->email)->first();
        $contacto->nombre = $request->nombre_contacto;
        $contacto->rut = $request->rut_contacto;
        $contacto->direccion = $request->direccion_contacto;
        $contacto->email = $request->email_contacto;
        $contacto->telefono_contacto = $request->telefono_contacto;
        $contacto->save();

        return response()->json([
            'status'=>true,
            'msg'=>'guardado'
        ]);
    }

    public function destroy(Request $request, $rut)
    {
        $t=Empresa::where('rut',$request->rut)->first();
        $t->delete();
        
        return response()->json([
            'status' => true,
            'msg'    => 'Eliminado'
        ]);
    }
}
