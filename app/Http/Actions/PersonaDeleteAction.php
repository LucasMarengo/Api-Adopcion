<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Persona;

final class PersonaDeleteAction
{
    public function __invoke($id_persona)
    {
        $persona = Persona::find($id_persona);
        if($persona->delete()){
            return response()->json([
                'status' => 'Ok',
                'message' => 'La Persona Fue Eliminada Exitosamente',
            ]);
        }
    }
}