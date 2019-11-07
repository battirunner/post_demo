<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Hash;
class RegisterController extends Controller
{
    //
    public function showRegistrationForm()
    {
        $route = Route::current();
        if($route->uri == "first")
            return view('firstregister');
        
        return view('register');
    }

    public function firstRegister()
    {
        $this->validate(request(), [
			
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:3|confirmed'
        ]);

        $user = $this->createFirstUser(request()->all());
        auth()->login($user);
        
        return redirect(route('admin.dashboard'))->withMessage('Registration Successfull');
    }

    public function register()
    {
        // dd(request()->all());
        return redirect()->back()->withErrors('Adding Another Admin Feature Not Active Yet');
        $this->validate(request(), [
			
    		'email' => 'required|email',
    		'password' => 'required|min:3|confirmed'
        ]);
        
        $user = $this->createUser(request()->all());
    }

    protected function createUser(array $data)
    {
    	return User::create([
			'name' => $data['name'],
    		'email' => $data['email'],
    		'password' => Hash::make($data['password'])
    	]);
    }

    protected function createFirstUser(array $data)
    {
        // dd($data);
    	return User::create([
			'name' => $data['name'],
            'email' => $data['email'],
            'user_type' => $data['user_type'],
            'admin_level' =>$data['admin_level'],
    		'password' => Hash::make($data['password'])
    	]);
    }

}
