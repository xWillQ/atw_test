<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private function generatePassword($length = 8)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $count = mb_strlen($chars);

        for ($i = 0, $result = ''; $i < $length; $i++) {
            $index = rand(0, $count - 1);
            $result .= mb_substr($chars, $index, 1);
        }

        return $result;
    }

    public function register(RegisterRequest $req)
    {
        // TODO: Добавить обработку ошибок
        $input = $req->all();
        $input['password'] = $this->generatePassword();

        try {
            $user = User::create($input);
        } catch (\Illuminate\Database\QueryException $e) {
            return response('Пользователь с такой почтой уже существует', 409, ['content-type' => 'application/json']);
        }

        $token = $user->createToken('MyApp')->accessToken;
        return [
            'token' => $token,
            // Пользователь достаётся из бд т.к. $user содержит не все поля (часть полей заполняются стандартными значениями)
            'user' => User::find($user->id),
            'password' => $input['password']
        ];
    }

    public function login(LoginRequest $req)
    {
        // TODO: Добавить обработку ошибок
        $input = $req->all();
        $user = User::where('email', $input['email'])->where('password', $input['password'])->first();

        if ($user == null) {
            return response('Ошибка в заполнении данных', 408, ['content-type' => 'application/json']);
        } else {
            $token = $user->createToken('MyApp')->accessToken;
            return [
                'token' => $token,
                'user' => $user,
                'password' => $input['password']
            ];
        }
    }
}
