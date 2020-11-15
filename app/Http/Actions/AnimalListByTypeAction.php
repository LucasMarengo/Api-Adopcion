<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Animal;

final class AnimalListByTypeAction
{
    public function __invoke($tipo)
    {
        $animales = Animal::select('animals.nombre as nombreAnimal', 'personas.nombre as nombrePersona', 'conexions.tipo as tipoConexion' )
            ->join('conexions', 'animals.id_animal', '=', 'conexions.id_animal')
            ->join('personas', 'conexions.id_persona', '=', 'personas.id_persona')
            ->where('conexions.tipo', '=', $tipo)
            ->get();

        return response()->json([$animales]);
    }
}
