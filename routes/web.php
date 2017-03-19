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

$app->get('divisions', [
  'as' => 'divisions.index', 'uses' => 'DivisionController@index'
]);

$app->get('player/index', [
  'as' => 'player.index', 'uses' => 'PlayerController@index'
]);

$app->get('user/index', [
  'as' => 'user.index', 'uses' => 'UserController@index'
]);

$app->post('league/store', [
  'as' => 'league.store', 'uses' => 'LeagueController@store'
]);

$app->get('{slug}/divisions', [
  'as' => 'league.divisions', 'uses' => 'LeagueController@divisions'
]);

$app->get('{slug}/teams', [
  'as' => 'league.teams', 'uses' => 'LeagueController@teams'
]);

$app->get('{slug}/team/{id}', [
  'as' => 'team.get', 'uses' => 'TeamController@get'
]);

$app->get('league/{id}/edit', [
  'as' => 'league.edit', 'uses' => 'LeagueController@edit'
]);

$app->get('{slug}/team/{id}/edit', [
  'as' => 'team.edit', 'uses' => 'TeamController@edit'
]);

$app->get('player/{id}', [
  'as' => 'player.get', 'uses' => 'PlayerController@get'
]);

$app->get('user/{id}', [
  'as' => 'user.get', 'uses' => 'UserController@get'
]);

$app->get('user/{id}/roles', [
  'as' => 'user.roles', 'uses' => 'UserController@roles'
]);

$app->get('{slug}', [
  'as' => 'league.get', 'uses' => 'LeagueController@get'
]);
