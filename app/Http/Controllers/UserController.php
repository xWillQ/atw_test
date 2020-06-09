<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $req) {
        return $req->user();
    }

    public function updateUser(UpdateUserRequest $req) {
        $input = $req->all();
        $user = $req->user();
        $input['name'] = $input['show_name'];
        $user->fill($input)->save();
        return $user;
    }
}
