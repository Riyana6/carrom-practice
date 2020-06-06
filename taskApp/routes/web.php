<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/score', function () {
    $data=App\scoreboard::all();
    return view('score')->with('scoreboard',$data);
});

//Route::post('/saveScoreBoard', 'scoreboardcontroller@store');

/*Route::get('/markascompleted/{id}','TaskController@UpdateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}','TaskController@UpdateTaskAsNotCompleted');

Route::get('/deletetask/{id}','TaskController@DeleteTask');

Route::get('/updatetask/{id}','TaskController@UpdateTaskView');

Route::post('/updatetasks','TaskController@UpdateTask');*/