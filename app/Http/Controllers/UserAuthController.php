<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function signUp()
    {

        if (!Auth::check()) {
            return view('user.Pages.sign-up');
        } else {
            return redirect('/'); // or wherever you want authenticated users to go
        }
    }
    public function signUpUser(Request $req)
    {

        $req->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required|min:6',
            'number' => 'required',
            'email' => 'required|unique:users|email',
            'dob' => 'required'
        ]);

        $newUser = new User;
        $newUser->fullName = $req->firstname . ' ' . $req->lastname;
        $newUser->password = Hash::make($req->password);
        $newUser->number = $req->number;
        $newUser->email = $req->email;
        $newUser->dob = $req->dob;
        $newUser->fatherName = 'none';
        $newUser->address = 'Not Provided';
        $newUser->accountType = 'Customer';


        if ($newUser->save()) {
            Auth::login($newUser);
            return redirect('/')->with('success', 'Account Registered Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }


    public function getLoginPage()
    {
        if (!Auth::check()) {
            return view('user.Pages.login');
        } else {
            return redirect('/'); // or wherever you want authenticated users to go
        }
    }

    public function loginUser() {}


    public function getAccountPage(){
        $user = Auth::user();
        if(!$user){
            return redirect()->route('login-user');
        }
        $orders = Order::where('customer_id', $user->id)->with('all_products', 'all_products.users')->get();

        // return response()->json($orders);

        return view('user.Pages.account', compact('user', 'orders'));
    }

    public function userUpdateData(Request $req){
        $user = User::findorfail(Auth::user()->id);

        if($user){
            $user->fullName = $req->fullName;
            if($req->password !== ''){
                $user->password = Hash::make($req->password);
            }
            $user->number = $req->number;
            $user->Email = $req->email;
            $user->dob = $req->dob;
            $user->save();
        }
        return redirect('/my-account')->with('success', 'Saved Sucessfully');
    }

    public function logoutUser(){
        if(!Auth::check()){
            return redirect()->route('login-user');
        }

        Auth::logout();
        return redirect()->route('login-user');
    }
}
