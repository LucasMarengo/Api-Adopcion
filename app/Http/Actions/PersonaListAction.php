<?php
declare(strict_types=1);

namespace App\Http\Actions;
use App\Persona;
final class PersonaListAction
{
    public function __invoke()
    {
        $personas = Persona::all();
        return response()->json([$personas]);
    }
}
