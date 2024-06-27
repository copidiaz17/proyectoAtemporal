<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    Public function index(){
        $productos = Producto::all();
        //return $productos;
        //para enviarlo a la vista
         //return view("Productos", compact("productos"));
         return response()->json($productos); 
        

    }

    public function crear(){
        return view("formProducto");
    } 

    public function store(Request $request){

        $producto = new Producto();
        
        $producto->producto_nombre = $request->nombre;
        $producto->producto_descripcion = $request->descripcion;
        $producto->producto_imagen = $request->imagen;
        $producto->producto_precio = $request->precio;

        $producto->save();

        $productoJSON = json_encode($producto);

    return $productoJSON;

        //return redirect('/Productos');

    }

    Public function mostrar($producto){
        $producto = Producto::find($producto);
        return view("mostrar", compact("producto"));
        //$productoJSON = json_encode($producto);

    //return $productoJSON;
    }

    Public function editar($id){

        $producto = Producto::findOrFail($id);
        return view("formEdicionProducto", compact('producto'));
    }

    public function actualizar(Request $request, $producto){
        $producto = Producto::find($producto);

        $producto->producto_nombre = $request->nombre;
        $producto->producto_descripcion = $request->descripcion;
        $producto->producto_imagen = $request->imagen;
        $producto->producto_precio = $request->precio;

        $producto->save();

        //return redirect("/Productos/{$producto->producto_id}");

        $productoJSON = json_encode($producto);

    return $productoJSON;
    }

    public function eliminar($id){

        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect("/Productos");

    }
}
 