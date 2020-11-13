<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Animal;

use Illuminate\Http\Request;

final class AnimalEditAction
{
    public function __invoke(Request $request,$id_animal)
    {


         $animal = Animal::find($id_animal);


        $nombre = $request->input('nombre');
        $edad = $request->input('edad');
        $genero = $request->input('genero');
        $raza = $request->input('raza');
        $pelaje = $request->input('pelaje');
        $contextura = $request->input('contextura');
        $descripcion = $request->input('descripcion');


        $animal->setNombre($nombre);
        $animal->setEdad($edad);
        $animal->setGenero($genero);
        $animal->setRaza($raza);
        $animal->setPelaje($pelaje);
        $animal->setContextura($contextura);
        $animal->setDescripcion($descripcion);

        if($animal->save()){
            return response()->json([
                'status' => 'Ok',
                'message' => 'Animal Editado Exitosamente',
            ]);
        }

    }
}
