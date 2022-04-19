<?php
namespace App\Http\Controllers;
use App\Models\Articulo;
use DB;

use Illuminate\Http\Request;
use app\Http\Requests\NuevoArticuloRequest;

class ArticuloController extends Controller{
    public function index(){
        $articulos = Articulo::orderBy('id','desc')->paginate(2);
        return view('articulos.articulos')->with(['articulos' => $articulos]);
    }

    public function mostrar_articulo($art){
        $art = Articulo::find($art);
        if(is_null($art)){
            abort(404);
        }
        return view('articulos.mostrar_articulo')->with(['articulo'=> $art]);
    }

    public function nuevo(){
        return view('articulos.nuevo');
    }
    
    public function guardar(NuevoArticuloRequest $request){
        $art = Articulo::create($request->only('titulo','descripcion','cuerpo'));
        return redirect()->route('un_articulo',['art'=>$art->id]);

    }
   
}

?>

