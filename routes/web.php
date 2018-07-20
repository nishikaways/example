<?php

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

Route::get('/', function() {
  return view('welcome');
});

//追加
Route::resource('tasks', 'TasksController', ['except' => [('edit')]]);

// 勉強のために追加した行をコメントアウト
// resourceコントローラーを使用しない場合は、以下の個別ルート設定のコメントを解除する。

// Route::get   ('tasks',              'TasksController@index')->name('tasks.index');
// Route::get   ('tasks/create',      'TasksController@create')->name('tasks.create');
// Route::post  ('tasks/store',       'TasksController@store')->name('tasks.store');
// Route::get   ('tasks/{id}',        'TasksController@show')->name('tasks.show');
Route::post  ('tasks/edit/{task_name}','TasksController@edit')->name('tasks.edit');
// Route::put   ('tasks',              'TasksController@update')->name('tasks.update');
// Route::delete('tasks/{id}',        'TasksController@destroy')->name('tasks.destroy');
