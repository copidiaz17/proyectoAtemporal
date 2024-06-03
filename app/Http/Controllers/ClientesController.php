<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;


class ClientesController extends Controller
{
    Public function index(){
     return view("formCliente");  
}

    Public function crear(Request $request){
        $cliente = new Cliente();

        $cliente->cliente_nombre = $request->nombre;
        $cliente->cliente_direccion = $request->direccion;
        $cliente->cliente_localidad = $request->localidad;
        $cliente->cliente_email = $request->email;
        $cliente->cliente_contraseña = $request->contraseña;
        $cliente->cliente_telefono = $request->telefono;
        

        $cliente->save();

        return redirect("/Clientes/Login");

    }

    public function ingresar(){
        return view("Login");
    }
}