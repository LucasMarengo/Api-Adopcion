<?php
declare(strict_types=1);

namespace App\Http\Actions;

final class PruebaAction
{
    public function prueba()
    {
        return response()->json(
            ['name' => 'Lucas'],
            ['name' => 'Pedro'],
        );
    }
}
