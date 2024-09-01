<?php

    namespace App\Http\Controllers;

use App\Http\Requests\LoginRecuest;
use App\Models\cliente;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\Request\LoginRequest;
    

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
            $cliente->cliente_contraseña = Hash::make($request->contraseña);
            $cliente->cliente_telefono = $request->telefono;
            

            $cliente->save();

            return redirect("/Clientes/Login");

        }

        public function ingresar(){
            return view("Login");
        }
        public function login(Request $request)
        {
            $credentials = $request->only('cliente_email', 'cliente_contraseña');
    
            
            if (Auth::guard('cliente')->attempt(['cliente_email' => $credentials['cliente_email'], 'password' => $credentials['cliente_contraseña']])) {
             
                return redirect()->intended('/');
            }
    
          
            return back()->withErrors([
                'cliente_email' => 'Correo electrónico o contraseña incorrectos.',
            ]);
        }

        

        
    }       