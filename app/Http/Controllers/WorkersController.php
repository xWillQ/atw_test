<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkersRequest;
use App\Http\Resources\UserWorkerRes;
use App\Models\Position;
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


        $query = UserCard::join('positions', 'users.position_id', '=', 'positions.id')
            ->select('users.*', 'positions.department_id');

        if ($user->role == 'worker') {
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

        $query = User::query();

        if ($user->role == 'worker') {
            $user_dep_id = Position::find($user->position_id)->department_id;
            $query = $query->join('positions', 'users.position_id', '=', 'positions.id')
            ->select('users.*', 'positions.department_id')->where('department_id', $user_dep_id);
        }

        $worker = $query->where('users.id', $id)->first();

        if ($worker != null) {
            return new UserWorkerRes($worker);
        } else {
            return response('User doesn\'t exist', 500);
        }
    }
}
