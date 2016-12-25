<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
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
    $players = app('db')->select("SELECT * FROM players");

    return response()->json($players);
  }

  public function get($id)
  {
    $player = app('db')->select("SELECT * FROM players WHERE id = ?", [$id])[0];

    return response()->json($player);
  }

  public function store(Request $request)
  {
    app('db')->insert("
      INSERT INTO players (first_name, last_name, number, bats, throws,
        created_at, updated_at)
      VALUES (?, ?, ?, ?, ?, ?, ?)",
      [
        $request->input('first_name'),
        $request->input('last_name'),
        $request->input('number'),
        $request->input('bats'),
        $request->input('throws'),
        time(),
        time()
      ]
    );
  }

  public function edit($id)
  {
    $player = app('db')->select("
      SELECT id, first_name, last_name, number, bats, throws
      FROM players
      WHERE id = ?",
      [$id]
    );

    return response()->json($player);
  }
}
