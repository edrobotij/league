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
    $users = app('db')->select("
      SELECT id, name, email, first_name, last_name,
      birthdate, city, state, zip FROM users"
    );

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

  public function store(Request $request)
  {
    app('db')->insert("
      INSERT INTO users (name, email, password, first_name, last_name,
        birthdate, city, state, zip, created_at, updated_at)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
      [
        $request->input('name'),
        $request->input('email'),
        app('hash')->make($request->input('password')),
        $request->input('first_name'),
        $request->input('last_name'),
        $request->input('birthdate'),
        $request->input('city'),
        $request->input('state'),
        $request->input('zip'),
        time(),
        time()
      ]
    );
  }

  public function update(Request $request)
  {
    app('db')->update("
      UPDATE users
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

  public function roles($id)
  {
    $role = app('db')->select("
      SELECT r.name FROM users u
      INNER JOIN role_user ru
      ON ru.user_id = u.id
      INNER JOIN roles r
      ON ru.role_id = r.id
      WHERE u.id = ?",
      [$id]
    );

    return response()->json($role);
  }
}
