<?php
declare(strict_types=1);

namespace App\Http\Actions;

final class CreateUserAction
{
    public function run()
    {
        $user = new User();
        $user->setName();

        $user->save();
    }
}
