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
         return view("Productos", compact("productos")); 

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

        return redirect('/Productos');

    }

    Public function mostrar($producto){
        $producto = Producto::find($producto);
        //return view("mostrar", compact("producto"));
        $productoJSON = json_encode($producto);

    return $productoJSON;
    }

    Public function editar($producto_id){

        $producto = Producto::findOrFail($producto_id);
        return view("formEdicionProducto", compact('producto'));
    }

    public function actualizar(Request $request, $producto){
        $producto = Producto::find($producto);

        $producto->producto_nombre = $request->nombre;
        $producto->producto_descripcion = $request->descripcion;
        $producto->producto_imagen = $request->imagen;
        $producto->producto_precio = $request->precio;

        $producto->save();

        return redirect("/Productos/{$producto->producto_id}");
    }

    public function eliminar($producto_id){

        $producto = Producto::findOrFail($producto_id);
        $producto->delete();

        return redirect("/Productos");

    }
}
 