<?php

declare(strict_types=1);

namespace App\Http\Actions;

use App\Animal;

final class AnimalListByTypeAction
{
    public function __invoke($id_animal)
    {

        // $animal = Animal::join('posts', 'posts.user_id', '=', 'users.id'),
        // ->where('users.tipo' = 1),
        // ->get();


        $animal = Animal::find($id_animal);
        if($animal->delete()){
            return response()->json([
                'status' => 'Ok',
                'message' => 'Animal Eliminado Exitosamente',
            ]);
        }
    }
}
