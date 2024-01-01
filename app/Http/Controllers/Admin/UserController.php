<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;
class UserController extends Controller
{
    //User
    public function userIndex($id = null)
    {
        $getUser = User::with('role')->get();
        //$getUser = User::with('role')->paginate('20');
        if(!empty($id)){
            $editUser = User::find($id);
        }else{
            $editUser = '';
        }
        return view('admin.user.index', compact('getUser', 'editUser'));
    }

    public function userStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => 'min:4|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:4'
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->role_id = $request->role_id;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->postcode = $request->postcode;
        $data->district = $request->district;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->back()->with('success', 'Added Successfully');
    }

    public function userUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role_id' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'min:4|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:4'
        ]);

        $data = User::find($request->id);
        if(Hash::check($request->password, $data->password) == true){
            $data->name = $request->name;
            $data->role_id = $request->role_id;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->postcode = $request->postcode;
            $data->district = $request->district;
            $data->password = bcrypt($request->password);
            $data->save();
            return redirect()->back()->with('success', 'Edited Successfully');
        }else{
            return redirect()->back()->with('delete', 'Account Password didn\'t matched');
        }
    }

    public function userDestroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('delete', 'Deleted Successfully');
    }
}
