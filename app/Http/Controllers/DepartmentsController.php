<?php

namespace App\Http\Controllers;

use App\Http\Resources\DepartmentRes;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function getDepartments() {
        return DepartmentRes::collection(Department::all());
    }
}
