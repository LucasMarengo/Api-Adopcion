<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Persona;
use App\Http\Controllers\PersonaController;
use Illuminate\Http\Request;

final class PersonaAddAction extends PersonaController
{
    public function __invoke(Request $request)
    {
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $dni = $request->input('dni');
        $telefono = $request->input('telefono');
        $email = $request->input('email');
        $direccion = $request->input('direccion');
        $apto= $request->input('apto');
        
        $persona = new Persona();
        $persona->setNombre($nombre);
        $persona->setApellido($apellido);
        $persona->setDni($dni);
        $persona->setTelefono($telefono);
        $persona->setEmail($email);
        $persona->setDireccion($direccion);
        $persona->setApto($apto);

        if ($persona->save()) {
            return response()->json([
                'status' => 'Ok',
                'message' => 'La Persona llamada '. $request->input('nombre') .' fue agregada con exito',
            ]);
        } else {
            return response()->json([
                'status' => 'Error',
                'message' => 'Ocurrio un error al agregar persona',
            ]);
        }
    }
}