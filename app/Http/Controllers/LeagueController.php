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
}
