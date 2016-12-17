<?php

namespace App\Http\Controllers;

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
      $leagues = app('db')->select("SELECT * FROM leagues");

      return response()->json($leagues);
    }

    public function get($slug)
    {
      $league = app('db')->select(
        "SELECT l.name, l.description, l.city, l.state,
                u.first_name, u.last_name, u.email
         FROM leagues l
         INNER JOIN users u
         ON l.commissioner_id = u.id
         WHERE slug = ?",
        [$slug]
      )[0];

      return response()->json($league);
    }

    public function edit($id)
    {
      $league = app('db')->select(
        "SELECT id, name, description, city, state FROM leagues WHERE id = ?",
        [$id]
      )[0];

      return response()->json($league);
    }
}
