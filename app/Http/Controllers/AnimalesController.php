<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class AnimalesController extends Controller
{
    public function crear(Request $request)
    {
        if ($request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'genero' => 'required',
            'raza' => 'required',
            'pelaje' => 'required',
            'contextura' => 'required',
            'descripcion' => 'required',
        ])) {

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
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    public function listar()
    {

        $animales = Animal::all();
        return response()->json([$animales]);
    }


    public function editar(Request $request)
    {
        // if ($request->validate([
        //     'id' => 'required',
        //     'nombre' => 'required',
        //     'edad' => 'required',
        //     'genero' => 'required',
        //     'raza' => 'required',
        //     'pelaje' => 'required',
        //     'contextura' => 'required',
        //     'descripcion' => 'required',
        // ])) {
            $id = $request->input('id');
            $nombre = $request->input('nombre');
            $edad = $request->input('edad');
            $genero = $request->input('genero');
            $raza = $request->input('raza');
            $pelaje = $request->input('pelaje');
            $contextura = $request->input('contextura');
            $descripcion = $request->input('descripcion');


            $animal  = new Animal();
            $animal->setId($id);
            $animal->setNombre($nombre);
            $animal->setEdad($edad);
            $animal->setGenero($genero);
            $animal->setRaza($raza);
            $animal->setPelaje($pelaje);
            $animal->setContextura($contextura);
            $animal->setDescripcion($descripcion);

           $result = $animal->update();
           return $result;

        // } else {
        //     return false;
        // }
    }


    public function eliminar()
    {

    }

}
