<?php
declare(strict_types=1);

namespace App\Http\Actions;

final class PruebaAction
{
    public function __invoke()
    { 
        //$users = User::all;
        return response()->json([
            ['name' => 'Lucas'],
            ['name' => 'Pedro'],
        ]);
    }
}
