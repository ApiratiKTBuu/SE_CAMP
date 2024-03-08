<?php

namespace App\Http\Controllers;

use App\Models\MajorModel;
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
        return redirect('user-list');
    }
    public function showUserList(){
        $user_data = UserModel::paginate(5);
        $major_data = MajorModel::all();
        return view('user_list',['oe_users'=>$user_data, 'oe_majors'=>$major_data]);
    }
    public function deleteUser($user_id){
        $user = UserModel::find($user_id);
        $user->delete();
        return Redirect::back();
    }
    public function editUser($user_id){
        $user_data = UserModel::find($user_id);
        $major_data = MajorModel::all();
        return view('edit_user',['oe_users'=>$user_data, 'oe_majors'=>$major_data]);
    }
    public function updateUser(Request $request){
        $user = UserModel::find(request('user_id'));
        $user->user_student_id = request('user_student_id');
        $user->user_fname = request('user_fname');
        $user->user_lname = request('user_lname');
        $user->user_email = request('user_email');
        $password = request('password');
        if($password!= null){
            $user->user_password = Hash::make(request('user_password'));
        }
        $user->user_role_id = (int)$request->input('user_role');
        $user->user_profile_image = "test";
        $user->user_major_id = 1;
        $user->save();
        return redirect('/user-list');
    }
}
