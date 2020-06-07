<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserWorkerRes;
use App\Models\User;
use App\Models\UserCard;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    public function getWorkerCards(Request $req)
    {
        $name = $req->query('query');
        $dep = $req->query('department_id');
        $pos = $req->query('position_id');

        $query = UserCard::query();

        if ($name != null) {
            $query = $query->where('name', $name);
        }
        if ($dep != null) {
            $query = $query->join('positions', 'users.position_id', '=', 'positions.id')
                ->select('users.*', 'positions.department_id')
                ->where('department_id', $dep);
        }
        if ($pos != null) {
            $query = $query->where('position_id', $pos);
        }

        return $query->paginate(12);
    }

    public function getWorkerById(int $id) {
        $worker = User::find($id);
        if ($worker != null) {
            return new UserWorkerRes(User::find($id));
        }
        else {
            return response('User doesn\'t exist', 500);
        }
    }
}
