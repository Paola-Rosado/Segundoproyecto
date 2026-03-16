<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;

class HomeController extends Controller
{   //
    public function __invoke(){
        return view('hello');
    }
    public function empresa(){
        $datos["nombre"]="Ruby Esmeralda Sosa Estrella";
        $datos["fecha"]="2026-12-15";
        $datos["actividad"]="Desarrollo de software";
        $datos["descripcion_about"]="Empresa dedicada al desarrollo de software a la medida de sus clientes";
        $datos["texto_ejemplo"]="Aqui va la descripcion del texto de ejemplo";

        $usuario=new Pagina();
        $datos["listadousuarios"]=$usuario->ObtenerListado();
        return view('principal',$datos);
    }
    public function update(Request $request){
        $usuarios=new Pagina();
        $respuesta=$usuarios->BuscarId($request->id);
        if(!empty($respuesta)){
            $respuesta->name=$request->name;
            $respuesta->save();
        }
        return $respuesta;
    }
}