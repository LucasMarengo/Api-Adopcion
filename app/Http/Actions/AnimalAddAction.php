<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Animal;
use App\Http\Controllers\AnimalesController;
use Illuminate\Http\Request;

final class AnimalAddAction extends AnimalesController
{
    public function __invoke(Request $request)
    {


            $nombre = $request->input('nombre');
            $edad = $request->input('edad');
            $genero = $request->input('genero');
            $raza = $request->input('raza');
            $pelaje = $request->input('pelaje');
            $contextura = $request->input('contextura');
            $descripcion = $request->input('descripcion');


            $animal  = new Animal();
            $animal->setNombre($nombre);
            $animal->setEdad($edad);
            $animal->setGenero($genero);
            $animal->setRaza($raza);
            $animal->setPelaje($pelaje);
            $animal->setContextura($contextura);
            $animal->setDescripcion($descripcion);

            if ($animal->save()) {
                return response()->json([
                    'status' => 'Ok',
                    'message' => 'Animal llamado '. $request->input('nombre') .' Agregado con exito',
                ]);
            } else {
                return response()->json([
                    'status' => 'Error',
                    'message' => 'Ocurrio un error al agregar animal',
                ]);
            }

    }
}
