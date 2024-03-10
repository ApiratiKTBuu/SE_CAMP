<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function insertUser(Request $request){
        $user = new UserModel();
        $user->user_student_id = request('user_student_id');
        $user->user_fname = request('user_fname');
        $user->user_lname = request('user_lname');
        $user->user_email = request('user_email');
        $user->user_password = Hash::make(request('user_password'));
        $user->user_role_id = (int)$request->input('user_role');
        $user->user_profile_image = "test";
        $user->user_major_id = 1;
        $user->save();
        return view('success');
    }
}
