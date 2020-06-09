<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RestoreConfirmRequest;
use App\Http\Requests\RestorePasswordRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(RegisterRequest $req)
    {
        // TODO: Добавить обработку ошибок
        $input = $req->all();
        $input['password'] = Str::random(8);

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

    public function restorePass(RestorePasswordRequest $req)
    {
        $user = User::where('email', $req->email)->first();

        if ($user == null) {
            return response('Пользователь с такой почтой не существует', 500, ['content-type' => 'application/json']);
        }

        $token = Str::random(60);

        DB::table('password_resets')->insert([
            'email' => $req->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        return response('Запрос был отправлен', 201, ['content-type' => 'application/json']);
    }

    public function confirmPassRestore(RestoreConfirmRequest $req)
    {
        $tokenData = DB::table('password_resets')->where('token', $req->token)->first();

        if ($tokenData == null) {
            return response('Пользователь с таким токеном не найден', 404, ['content-type' => 'application/json']);
        }

        $user = User::where('email', $tokenData->email)->first();

        $user->password = $req->password;
        $user->update();

        DB::table('password_resets')->where('email', $user->email)
            ->delete();

        return response('Пользователь успешно сменил пароль', 201, ['content-type' => 'application/json']);
    }
}
