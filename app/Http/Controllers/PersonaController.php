<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
class PersonaController extends Controller
{
    public function mostrar()
    {
        return view('personamostrar');
    }
    public function crear(Request $request)
    {
        $request->validate([
            'idPersona' => 'required',
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'dni' => 'required|numeric|max:80',
            'telefono' => 'required|numeric|min:0',
            'email' => 'required|min:0',
            'direccion' => 'required|min:0']);

            $idPersona =  $request->input('idPersona');
            $nombre = $request->input('nombre');
            $apellido = $request->input('aoellido');
            $dni = $request->input('dni');
            $telefono = $request->input('telefono');
            $email = $request->input('email');
            $direccion = $request->input('direccion');

            $persona = new Persona;
            $persona->setNombre($nombre);
            $persona->setApellido($apellido);
            $persona->setDni($dni);
            $persona->setTelefono($telefono);
            $persona->setEmail($email);
            $persona->setDireccion($direccion);
            $persona->save();

            
            if($persona->save()){
                return response()->json([
                    'status' => true,
                    'message' => 'Se cargo la persona con exito',
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'message' => 'Ocurrio un error en la carga de la persona',
                ]);
            }

    }
}

