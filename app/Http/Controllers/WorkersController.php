<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkersRequest;
use App\Http\Resources\UserWorkerRes;
use App\Models\Position;
use App\Models\Role;
use App\Models\User;
use App\Models\UserCard;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    public function getWorkerCards(WorkersRequest $req)
    {
        $user = $req->user();

        $name = $req->query('query');
        $dep = $req->query('department_id');
        $pos = $req->query('position_id');


        $query = UserCard::join('roles', 'users.role_id', '=', 'roles.id') // Получаем названия ролей
            ->where(function ($query) { // Выбираем только пользователей с ролью 'admin' или 'worker'
                $query->where('roles.name', 'worker')
                    ->orWhere('roles.name', 'admin');
            })
            ->join('positions', 'users.position_id', '=', 'positions.id') // Получаем id отделов
            ->select('users.*', 'department_id'); // Выбираем все столбцы из таблицы пользователей и столбец с id отделов

        if ($user->role->name == 'worker') {
            $user_dep_id = Position::find($user->position_id)->department_id;
            $query = $query->where('department_id', $user_dep_id);
        }

        if ($name != null) {
            $query = $query->where('name', $name);
        }
        if ($dep != null) {
            $query = $query->where('department_id', $dep);
        }
        if ($pos != null) {
            $query = $query->where('position_id', $pos);
        }

        return $query->paginate(12);
    }

    public function getWorkerById(WorkersRequest $req, int $id)
    {
        $user = $req->user();

        $worker = User::find($id);

        if ($worker == null) {
            return response('User doesn\'t exist', 500);
        }

        if (
            $user->role->name == 'worker' &&
            $worker->position->department->name != $user->position->department->name
        ) {
            return response('You don\'t have permission to view this user\'s data', 500);
        }

        return new UserWorkerRes($worker);
    }
}
