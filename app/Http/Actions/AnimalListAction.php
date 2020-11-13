<?php
declare(strict_types=1);

namespace App\Http\Actions;
use App\Animal;
final class AnimalListAction
{
    public function __invoke()
    {
        $animales = Animal::all();
        return response()->json([$animales]);
    }
}
