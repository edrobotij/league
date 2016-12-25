<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
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

  public function get($slug, $id)
  {
    $team = app('db')->select("
      SELECT t.name, t.city, t.state,
        CONCAT(u.first_name, ' ', u.last_name) AS 'manager',
        u.email AS 'manager_email'
      FROM teams t
      INNER JOIN leagues l
      ON l.id = t.league_id
      INNER JOIN users u
      ON u.id = t.manager_id
      WHERE l.slug = ? AND t.id = ?",
      [$slug, $id]
    )[0];

    return response()->json($team);
  }

  public function store(Request $request)
  {
    app('db')->insert("
      INSERT INTO teams (league_id, division_id, manager_id, name, city, state,
        created_at, updated_at)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
      [
        $request->input('league_id'),
        $request->input('division_id'),
        $request->input('manager_id'),
        $request->input('name'),
        $request->input('city'),
        $request->input('state'),
        time(),
        time()
      ]
    );
  }

  public function edit($slug, $id)
  {
    $team = app('db')->select("
      SELECT t.id, t.manager_id, t.name, t.city, t.state
      FROM teams t
      INNER JOIN leagues l
      ON l.id = t.league_id
      WHERE l.slug = ? AND t.id = ?",
      [$slug, $id]
    )[0];

    return response()->json($team);
  }

  public function update(Request $request)
  {
    app('db')->update("
      UPDATE teams
      SET manager_id = :manager_id, name = :name, city = :city,
        state = :state, updated_at = :updated_at
      WHERE id = :id",
      [
        'id' => $request->input('id'),
        'manager_id' => $request->input('manager_id'),
        'name' => $request->input('name'),
        'city' => $request->input('city'),
        'state' => $request->input('state'),
        'updated_at' => time()
      ]
    );
  }
}
