<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function login(Request $request)
    {
        $cliente = Cliente::where('dni', $request->dni)->first();

        if ($cliente)
        {
            if ($cliente->clave == $request->clave)
            {
                return view('home-logged')->with('cliente', $cliente);
            }
            else
            {
                return "Clave incorrecta";
            }
        }
        else
        {
            return "Usuario inexistente";
        }
    }



}
