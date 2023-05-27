<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UserDatatable;
use App\Http\Requests\user\AddUserRequest;
use App\Http\Requests\user\UpdateUserRequest;
use App\Models\Branch;
use App\Models\JobTitle;
use App\Models\Role;
use App\Models\User;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    use HelperTrait;

    public function index(UserDatatable $userDatatable)
    {
        return $userDatatable -> render ('admin.users.index');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(AddUserRequest $request)
    {
        $user_data = $request -> except('profile_picture', 'password'); // Get All Column Without [profile_picture]
        $user_data['password'] = Hash::make($request -> password);
        $image_data = $this->uploadImageProcessing($request -> profile_picture, 'user', 'profile', $request -> name, 'public', 100, 100); // Upload Image With Trait
        $user = User::create($user_data + $image_data); // Create New user From [user_data] Request And [image_data] Coming With Trait
        return redirect() -> route('admin.users.index') -> with('success', __('trans.user added successfully'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit',compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user_new_data = $request -> except('profile_picture', 'password'); // Get All Column Without [profile_picture]
        if ($request -> password != NULL)
            $user_new_data['password'] = bcrypt($request -> password);
        $image_data = $this->uploadImageProcessing($request -> profile_picture, 'user', 'profile', $request -> name, 'public', 100, 100, $user);
        $user->update($user_new_data + $image_data); // Create New user From [userData] Request
        return redirect() -> route('admin.users.index') -> with('success', __('trans.user edit successfully'));
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user -> image_name != 'default.png') { // Check If Profile Picture Name Not Equal Default Picture Name Do It
            $this -> deleteImageHandel('public', $user -> image_path); // Check If user Have Directory Profile Picture Delete It
        }
        $user -> delete(); // Delete user From user Table
        return redirect()->back()->with('delete', __('trans.user delete successfully'));
    }

}
