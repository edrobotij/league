<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeagueController extends Controller
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
    $leagues = app('db')->select("
      SELECT * FROM leagues"
    );

    return response()->json($leagues);
  }

  public function get($slug)
  {
    $league = app('db')->select("
      SELECT l.name, l.description, l.city, l.state,
        CONCAT(u.first_name, ' ', u.last_name) AS 'commissioner',
        u.email AS 'commissioner_email'
      FROM leagues l
      INNER JOIN users u
      ON l.commissioner_id = u.id
      WHERE slug = ?",
      [$slug]
    )[0];

    return response()->json($league);
  }

  public function store(Request $request)
  {
    app('db')->insert("
      INSERT INTO leagues (name, description, city, state, commissioner_id
        created_at, updated_at, slug)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
      [
        $request->input('name'),
        $request->input('description'),
        $request->input('city'),
        $request->input('state'),
        $request->input('commissioner_id'),
        time(),
        time(),
        app('helper')->slugify($request->input('name')) // Needs implemented
      ]
    );
  }

  public function edit($id)
  {
    $league = app('db')->select("
      SELECT id, name, description, city, state FROM leagues WHERE id = ?",
      [$id]
    )[0];

    return response()->json($league);
  }

  public function update(Request $request)
  {
    app('db')->update("
      UPDATE leagues
      SET name = :name, description = :description, city = :city,
        state = :state, updated_at = :updated_at
      WHERE id = :id",
      [
        'id' => $request->input('id'),
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'city' => $request->input('city'),
        'state' => $request->input('state'),
        'updated_at' => time()
      ]
    );
  }

  public function divisions($slug)
  {
    $divisions = app('db')->select("
      SELECT d.name FROM divisions d
      INNER JOIN leagues l
      ON l.id = d.league_id
      WHERE l.slug = ?",
      [$slug]
    );

    return response()->json($divisions);
  }

  public function teams($slug)
  {
    $teams = app('db')->select("
      SELECT t.name, t.city, t.state FROM teams t
      INNER JOIN leagues l
      ON l.id = t.league_id
      WHERE l.slug = ?",
      [$slug]
    );

    return response()->json($teams);
  }
}
