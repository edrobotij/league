<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('leagues', [
  'as' => 'league.index', 'uses' => 'LeagueController@index'
]);

$app->get('{slug}', [
  'as' => 'league.get', 'uses' => 'LeagueController@get'
]);

$app->get('league/{id}/edit', [
  'as' => 'league.edit', 'uses' => 'LeagueController@edit'
]);

$app->get('users', [
  'as' => 'user.index', 'uses' => 'UserController@index'
]);
