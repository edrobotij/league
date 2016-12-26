<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisionController extends Controller
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
    $divisions = app('db')->select("
      SELECT d.id, d.name, d.created_at, d.updated_at, l.name AS 'league',
        l.slug AS 'league_slug'
      FROM divisions d
      INNER JOIN leagues l
      ON l.id = d.league_id"
    );

    return response()->json($divisions);
  }
}
