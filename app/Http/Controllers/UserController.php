<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
      $users = app('db')->select(
        "SELECT id, name, email, first_name, last_name,
          birthdate, city, state, zip FROM users");

      return response()->json($users);
    }
}