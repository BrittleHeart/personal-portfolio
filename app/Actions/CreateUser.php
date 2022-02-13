<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateUser
{
    public function __invoke(array $data): User
    {
        return User::create([
            ...$data,
            'password' => Hash::make($data['password'])
        ]);
    }
}
