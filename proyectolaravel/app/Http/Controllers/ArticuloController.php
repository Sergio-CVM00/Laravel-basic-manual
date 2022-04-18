<?php
namespace App\Http\Controllers;
use App\Models\Articulo;
use DB;

use Illuminate\Http\Request;

class ArticuloController extends Controller{

    public function index(){
        $articulos = Articulo::all();
        return view('articulos.articulos_view')->with(['articulos' => $articulos]);
    }

    public function mostrar_articulo($artId){
        $articulo = Articulo::find($artId);
        if(is_null($articulo)){
            abort(404);
        }
        return view('articulos.mostrar_articulo_view')->with(['articulo'=> $articulo]);
    }
}
?>