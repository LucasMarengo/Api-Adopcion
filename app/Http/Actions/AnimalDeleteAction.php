<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Animal;

final class AnimalDeleteAction
{
    public function __invoke($id_animal)
    {
        $animal = Animal::find($id_animal);
        if($animal->delete()){
            return response()->json([
                'status' => 'Ok',
                'message' => 'Animal Eliminado Exitosamente',
            ]);
        }
    }
}
