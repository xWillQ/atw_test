<?php

namespace App\Http\Controllers;

use App\Http\Resources\DepartmentRes;
use App\Http\Resources\DepartmentWithPositionsRes;
use App\Models\Department;
use App\Models\Position;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function getDepartments(Request $req) {
        $user = $req->user();
        if ($user->role == 'user') {
            return DepartmentRes::collection(Department::all());
        }
        if ($user->role == 'worker') {
            $dep_id = Position::find($user->position_id)->department_id;
            return DepartmentWithPositionsRes::collection([Department::find($dep_id)]);
        }
        if ($user->role == 'admin') {
            return DepartmentWithPositionsRes::collection(Department::all());
        }
    }
}
