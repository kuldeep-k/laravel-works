<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');

        // $this->middleware('log')->only('index');

        // $this->middleware('subscribed')->except('store');
    }

    public function index()
    {
        return view('user.profile', ['user' => User::all()]);
    }

    public function login()
    {
        return view('user.profile', ['user' => User::all()]);
    }

    public function register()
    {
        return view('user.profile', ['user' => User::all()]);
    }
}

 ?>
