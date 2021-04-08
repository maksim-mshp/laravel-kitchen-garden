<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $tasks = [
        [
          'id'=>1,
          'name'=>'Изучить Laravel'
        ], 
        [
          'id'=>2,
          'name'=>'Повторить PHP'
        ], 
        [
          'id'=>3,
          'name'=>'Вспомнить Vue.js'
        ]
      ];

    return view('tasks', [
        'tasks' => $tasks
    ]);
});
