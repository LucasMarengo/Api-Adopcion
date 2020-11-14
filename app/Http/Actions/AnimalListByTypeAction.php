<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Animal;

final class AnimalListByTypeAction
{
    public function __invoke($tipo)
    {
        $animales = Animal::select('animals.nombre as nombreAnimal', 'personas.nombre as nombrePersona', 'conexiones.tipo as tipoConexion' )
            ->join('conexiones', 'animals.id_animal', '=', 'conexiones.id_animal')
            ->join('personas', 'conexiones.id_persona', '=', 'personas.id_persona')
            ->where('conexiones.tipo', '=', $tipo)
            ->get();

        return response()->json([$animales]);
    }
}
