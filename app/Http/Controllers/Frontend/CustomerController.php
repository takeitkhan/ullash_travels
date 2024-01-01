<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Validator;
use Input;
use App\Models\User;
use App\Models\Role;
use App\Models\Roleuser;
use App\Models\UserAddressBook;
use App\Models\ProductOrder;
use App\Models\ProductOrderDetails;
class CustomerController extends Controller
{
    /** Login */
    public function login(){
        if(Auth::check()){
            return redirect()->route('frontend_index')->with('success', 'You are Logged in.');
        }else{
            return view('frontend.common.dashboard.login');
        }
    }

    /** Do Login */
    public function doLogin(Request $request)
    {
    // validate the info, create rules for the inputs
    $rules = [
        'email'    => 'required|email', // make sure the email is an actual email
        'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
    ];

    // run the validation rules on the inputs from the form
    $validator = Validator::make($request->all(), $rules);

    // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return redirect()->to('frontend_login')
                ->withErrors($validator)
                ->withInput($request->except('password')); 
        } else {
            // create our user data for the authentication
            $userdata = [
                'email'     => $request->email,
                'password'  => $request->password
            ];
            $user = User::where('email', $request->email)->first();
            $errors = [];
            if(!$user){
                $errors = ['email' => 'The provided credentials do not match our records.'];
            }
            if ($user && !\Hash::check($request->password, $user->password)) {
                $errors = ['password' => 'The provided credentials do not match our records.'];
            }

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                $request->session()->regenerate();
                return redirect()->route('frontend_dashboard', session()->getId())->withSuccess('Great! You have Successfully loggedin');
            } else {
                // validation not successful, send back to form
                return redirect()->route('frontend_login')->withInput($request->input())->withErrors($errors);
            }
        }
    }

    /** Logout */
    public function logout(Request $request) {
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('frontend_index')->with('success', 'Sign out successfullly.');
        }else {
            return view('frontend.common.dashboard.login');
        }
    }
    
    /**
     * register
     *
     * @param  mixed $request
     * @return void
     */
    public function register(Request $request){
        if(Auth::check()){
            return redirect()->route('frontend_index')->with('success', 'You are Logged in.');
        }else{
            return view('frontend.common.dashboard.register');
        }
    }
    
    /**
     * doRegister
     *
     * @return void
     */
    public function doRegister(Request $request){
        //dd($request->all());
        //dd($request->role);
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|min:11',
            'role'  => 'required',
        ]);
        if($request->role == 'instructor' || 'student'){
            $data = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'name' => $request->first_name.' '.$request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
            $createUser = User::create($data);
            $role = Role::where('code', $request->role)->first();
            $assignRole = [
                'user_id' => $createUser->id,
                'role_id' => $role->id,
            ];
            Roleuser::create($assignRole);
            $request->session()->regenerate();
            return redirect()->route('frontend_dashboard', session()->getId())->withSuccess('Great! You have Successfully loggedin');

        }else{
            return redirect()->back()->with('delete', 'Registration failed');
        }
    }


      /**
     * Function to check whether the email already exists
     *
     * @param array $request All input values from form
     *
     * @return true or false
     */
    public function checkUserEmailExists(Request $request)
    {
        $email = $request->input('email');
        
        $users = User::where('email',$email)->first();
        
        echo $users ? "false" : "true";
    }

    //Dhasboard
    public function dashboard(){
        if(Auth::check()){
            return view('frontend.common.dashboard.dashboard');
        }else{
            return redirect()->route('frontend_login');
        }
    }

    //Ajax request Order Quick View
    public function orderQuickViewAjax($id)
    {
        $order = ProductOrder::with('user', 'orderDetails')->where('id', $id)->orderBy('created_at', 'DESC')->first();
        return view('frontend.product.order-modal', compact('order'));
    }

    /**
     * Account Details Update
     */
    public function accountUpdate(Request $request){
        if(Auth::check()){
           $data = User::find(Auth::user()->id);
           $data->name = $request->name;
            if(Hash::check($request->password, $data->password) && $request->password == $request->confirm_passowrd){
                $data->save();
                return redirect()->back()->with('success', 'Account Updated Successfully');
            } else {
                return redirect()->back()->with('delete', 'Password not matched');
            }
        }else{
            return redirect()->route('frontend_customer_login');
        }
    }

    //Address New
    public function AddressUpdate(Request $request){
         if(Auth::check()){
            //validation
           $rules = [
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'postcode' => 'required',
                'thana' => 'required',
                'phone' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput($request->input()); 
            } 

            $data = User::find(Auth::user()->id);
            $data->first_name = $request->first_name;
            $data->last_name = $request->last_name;
            $data->name = $request->first_name.' '.$request->last_name;
            $data->address = $request->address;
            $data->postcode = $request->postcode;
            $data->thana = $request->thana;
            $data->district = $request->district;
            $data->phone = $request->phone;
            $data->birthdate = $request->birthdate;
            $data->save();
           
           return redirect()->back()->with('success', 'Updated Successfully');
        } else{
            return redirect()->route('frontend_login');
        }
    }

}
