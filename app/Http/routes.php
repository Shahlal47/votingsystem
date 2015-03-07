<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::model('voter', 'Voter');
//Route::model('votes', 'Votes');
//Route::model('candidate', 'Candidate');



Route::resource('voters', 'VoterController');
//Route::get('candidate', 'CandidateController');
//Route::get('votes', 'VotesController');



Route::bind('voter', function($value, $route) {
	return App\Voter::whereId($value)->first();
});



//Route::bind('votes', function($value, $route) {
//	return App\Votes::whereId($value)->first();
//});
//
//Route::bind('candidate', function($value, $route) {
//	return App\Candidate::whereId($value)->first();
//});


//
//Route::model('tasks', 'Task');
//Route::model('projects', 'Project');
//
//
//Route::bind('tasks', function($value, $route) {
//	return App\Task::whereSlug($value)->first();
//});
//Route::bind('projects', function($value, $route) {
//	return App\Project::whereSlug($value)->first();
//});
//
//Route::resource('projects', 'ProjectsController');
//Route::resource('projects.tasks', 'TasksController');