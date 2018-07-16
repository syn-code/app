<?php

use App\Task;

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


/*
    //index route

    - Here we are loading views, but we are not passing any data to the view, we need to be explicit for that.
    
    - We can pass the view some data by inputting a second arguemnt.
    - the second argument can be applied with a associative array.
    - can even use compact() this is an array. For example :

    return view('welcome', [
        'name' => 'James',
        'title' => 'Learning Laravel | Through Laracast',
        'task1' => 'my first application',
    ]);

*/
Route::get('/task', function () {

    //$task = DB::table('uploads')->get();
    //this is using eloquent and calling from the Uploads Model.
    $task = Task::all();

    /*
        if we want to test a database query from a route
        laravel is smart enough to put it into a JSON format
            - which can be useful for APIs
        just return the $variable
    */

    
    return view('task.index', compact('task'));
});

/*
    route(/task/{id}):
    - this route is looking for the task folder and looking to see which id it has been given
    - the $id is passed to the function.
    - $task variable then handles the DB query to find the id
    - theview then is returned to show.blade.php and passing through the results of $task.
*/
Route::get('/task/{id}', function ($id) {
    /*
        note the get('/task/{id}) the curley braces counts as a wildcard in laravel
        then add the wild card id to the function ($id)
    */

    //$task = DB::table('uploads')->find($id);
    $task = Task::find($id);
    Task::incomplete();
    //dd($task);
    return view('task.show', compact('task'));
});

//about us route
Route::get('about', function () {
    return view('about');
});

//Named Routes
//Route::get('', 'HomeController@home');
