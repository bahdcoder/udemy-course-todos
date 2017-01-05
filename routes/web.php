<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', [
	'uses' => 'PagesController@new'
]);

Route::get('/todos', [
	'uses' => 'TodosController@index',
    'as'   => 'todos'
]);

Route::get('/todo/delete/{id}', [
    'uses' => 'TodosController@delete',
    'as'   => 'todo.delete'
]); 

Route::get('/todo/update/{id}', [
    'uses' => 'TodosController@update',
    'as'   => 'todo.update'
]); 

Route::post('/todo/save/{id}', [
    'uses' => 'TodosController@save',
    'as' => 'todos.save'
]); 

Route::post('/create/todo', [
    'uses' => 'TodosController@store'
]);

Route::get('/todos/completed/{id}', [
    'uses' => 'TodosController@completed',
    'as'  => 'todos.completed'
]);