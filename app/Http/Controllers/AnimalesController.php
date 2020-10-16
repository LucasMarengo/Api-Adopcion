<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
class AnimalesController extends Controller
{
        public function crear(Request $request)
        {
            $request->validate([
                'idAnimal' =>'required',
                'nombre' => 'required',
                'edad' => 'required',
                'genero' => 'required',
                'raza' => 'required',
                'pelaje' => 'required',
                'contextura' => 'required',
                'descripcion' => 'required',
            ]);


            $idAnimal = $request->input('idAnimal');
            $nombre = $request->input('nombre');
            $edad = $request->input('edad');
            $genero = $request->input('genero');
            $raza = $request->input('raza');
            $pelaje = $request->input('pelaje');
            $contextura = $request->input('contextura');
            $descripcion = $request->input('descripcion');


            $animal  = new Animal();
            $animal->setIdAnimal($idAnimal);
            $animal->setNombre($nombre);
            $animal->setEdad($edad);
            $animal->setGenero($genero);
            $animal->setRaza($raza);
            $animal->setPelaje($pelaje);
            $animal->setContextura($contextura);
            $animal->setDescripcion($descripcion);

            if($animal->save()){
                return response()->json([
                    'status' => true,
                    'message' => 'Se cargo el animal con exito',
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'message' => 'Ocurrio un error en la carga del animal',
                ]);
            }

        }


        public function listar()
        {
            $animales = Animal::all();
            return response()->json([$animales]);
        }

}
