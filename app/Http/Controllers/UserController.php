<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function get($id)
    {
      $user = app('db')->select(
        "SELECT id, name, email, first_name, last_name,
          birthdate, city, state, zip FROM users WHERE id = ?",
        [$id]
      )[0];

      return response()->json($user);
    }

    public function update(Request $request)
    {
      app('db')->update(
        "UPDATE users
         SET name = :name, email = :email, first_name = :first_name,
             last_name = :last_name, birthdate = :birthdate, city = :city,
             state = :state, zip = :zip, updated_at = :updated_at
         WHERE id = :id",
        [
          'id' => $request->input('id'),
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'first_name' => $request->input('first_name'),
          'last_name' => $request->input('last_name'),
          'birthdate' => $request->input('birthdate'),
          'city' => $request->input('city'),
          'state' => $request->input('state'),
          'zip' => $request->input('zip'),
          'updated_at' => time()
        ]
      );
    }
}
