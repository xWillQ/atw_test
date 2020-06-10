<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RestoreConfirmRequest;
use App\Http\Requests\RestorePasswordRequest;
use App\Http\Resources\UserRes;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(RegisterRequest $req)
    {
        $time_hour_ago = Carbon::now()->subHour();

        $MAX_REGISTERED_PER_HOUR = 5;
        $registered_in_last_hour = User::where('created_at', '>', $time_hour_ago->toDateTimeString())->count();

        if ($registered_in_last_hour >= $MAX_REGISTERED_PER_HOUR) {
            return response('Слишком много пользователей было зарегистрированно за последний час', 408, ['content-type' => 'application/json']);
        }

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
            'user' => new UserRes(User::find($user->id)),
            'password' => $input['password']
        ];
    }

    public function login(LoginRequest $req)
    {
        $input = $req->all();
        $user = User::where('email', $input['email'])->where('password', $input['password'])->first();

        if ($user == null) {
            return response('Ошибка в заполнении данных', 408, ['content-type' => 'application/json']);
        }
        if ($user->email_confirmed == false) {
            return response('Пользователь не подтвердил почту', 406, ['content-type' => 'application/json']);
        }

        $token = $user->createToken('MyApp')->accessToken;
        return [
            'token' => $token,
            'user' => new UserRes($user),
            'password' => $input['password']
        ];
    }

    public function restorePass(RestorePasswordRequest $req)
    {
        $user = User::where('email', $req->email)->first();

        if ($user == null) {
            return response('Пользователь с такой почтой не существует', 404, ['content-type' => 'application/json']);
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
