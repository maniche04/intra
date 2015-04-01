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
	$username = Auth::user()->username;
    $firstname = Auth::user()->firstname;
    $users = DB::select("SELECT username FROM users ORDER BY username ASC");

    return View::make('layout/app', array('user'=>$username, 'firstname' => $firstname, 'users' => $users));
    

})->before('auth');

Route::get('home',function(){
    return View::make('home');
});

Route::get('todos',function(){
    return View::make('todo');
});

Route::post('todos/add',function(){
    $input = Input::all();
    
    DB::table('todos')->insert(
        array('title' => $input['Title'], 'description' => $input['Description'])
    );
    echo "Saved!";
});

Route::get('todos/get',function(){
    $todos = DB::table('todos')->get();
    $todosj = json_encode($todos);
    print_r($todosj);
});

Route::get('login', array('as' => 'login', function () { 
	return View::make('auth/login');
}));


Route::get('logout', array('as' => 'logout', function () {
	Auth::logout();
	return Redirect::to('/');
 }))->before('auth');


Route::post('login', function () {
	
    $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        
        if (Auth::attempt($user)) {
            return Redirect::to('/')
                ->with('flash_notice', 'You are successfully logged in.');
        }
        
        // authentication failure! lets go back to the login page
        return Redirect::to('login')
            ->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
});

Route::get('adduser',function(){
    $username = 'manish';
    $password = Hash::make('Almunia24');
    $firstname = 'Manish';
    $lastname = 'Bhattarai';
    
    if (DB::statement ("INSERT INTO users (`username`,`password`,`firstname`,`lastname`) VALUES ('" . $username . "','" . $password . "','" . $firstname . "','" . $lastname . "')")) {
        echo "Saved successfully!";
    } else {
        echo "Error!";
    }
});

