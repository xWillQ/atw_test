<?php

namespace App\Http\Controllers;

use App\Http\Resources\DepartmentRes;
use App\Http\Resources\DepartmentWithPositionsRes;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function getDepartments(Request $req) {
        $user = $req->user();
        if ($user->role->name == 'user') {
            return DepartmentRes::collection(Department::all());
        }
        if ($user->role->name == 'worker') {
            return DepartmentWithPositionsRes::collection([$user->position->department]);
        }
        if ($user->role->name == 'admin') {
            return DepartmentWithPositionsRes::collection(Department::all());
        }
    }
}
