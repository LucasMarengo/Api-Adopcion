<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Persona;

use Illuminate\Http\Request;

final class PersonaEditAction
{
    public function __invoke(Request $request,$id_persona)
    {


         $persona = Persona::find($id_persona);


         $nombre = $request->input('nombre');
         $apellido = $request->input('apellido');
         $dni = $request->input('dni');
         $telefono = $request->input('telefono');
         $email = $request->input('email');
         $direccion = $request->input('direccion');
        
         $persona->setNombre($nombre);
         $persona->setApellido($apellido);
         $persona->setDni($dni);
         $persona->setTelefono($telefono);
         $persona->setEmail($email);
         $persona->setDireccion($direccion);

        if($persona->save()){
            return response()->json([
                'status' => 'Ok',
                'message' => 'La Persona ha sido editada Exitosamente',
            ]);
        }

    }
}
