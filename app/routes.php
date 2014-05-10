<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

	// The dashboard (or a sub dashboard) should include the following:
	// The next important tasks
	// People to talk to, based on the @mentions
	// Reminders

	// Is it different in the mornings and evenings?

	// The calendar
	// How to include my work calendar?

	// Nice to have
	// Time until the train leaves.
	// Status for the train?

	return View::make('dashboard');
});


Route::get('/test/', function()
{
	$yr = Yr\Yr::create("Norway/Vestfold/Sandefjord/Sandefjord", "/tmp");

	$forecast = $yr->getCurrentForecast();
	echo sprintf("Time: %s to %s\n", $forecast->getFrom()->format("H:i"), $forecast->getTo()->format("H:i"));
	echo sprintf("Temp: %s %s\n", $forecast->getTemperature(), $forecast->getTemperature('unit'));
	echo sprintf("Wind: %smps %s\n", $forecast->getWindSpeed(), $forecast->getWindDirection('name'));
});

Route::post('/tasks/', function()
{
	$description = Input::get('taskDescription');

	// Parse description
	// Check for husk => set reminder
	// Check for time - example: i morgen, i morgen kl åtte, i kveld
	// Parse fuzzy time - i morgen => tomorrow 10.00 am
	// Parse @names and store as stakeholders
	// Parse #hashtags and store as project

	print $description;

	return true;
	//return View::make('dashboard');
});
