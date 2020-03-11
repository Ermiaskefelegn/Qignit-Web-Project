<?php

// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
// use App\User;
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






// Route::get('/contact', 'pagesController@getcontact') ;
// Route::get('/about', 'pagesController@getabout') ;
// Route::get('/', 'pagesController@getIndex') ;

// Route::group(['middleware' => ['web']], function() { 
// 	//

// });



Route::get('/', function () {

    return view('index');
});
Route::get('/Home', function () {

    return view('index');
});
Route::get('/index', function () {

    return view('product');
});

// Route::post('/search', function(){
// 	$q = Input::get('q');
// 	if($q != ""){
// 		$user = User::where('name', 'LIKE','%' . $q . '%')
// 		->orWhere('email', 'LIKE' ,'%' . $q . '%')
// 		->get();
// 		if(count($user) > 0)
// 			return view('welcome')->withDetails($user )->withQuery ( $q );

// 	}
// 	return view('welcome')->withMessage("No data found!");
// });


	
	  


//  Route::get('/', function () {

//      return view('welcome');
//  });
//  Route::get('/admin','AdminController@login');

//  Route::match(['get','post'],'/admin','AdminController@login');
//  Auth::routes();
// Route::get('/home','HomeController@index')-> name('home');

// Route::group(['middleware'=>['auth']],function(){

// Route::get('/admin/dashboard','AdminController@dashboard');

//  Route::get('/admin/settings','AdminController@settings');

//  Route::get('/admin/check-pwd','AdminController@checkpassword');
//   Route::match(['get','post'],'/admin/update-pwd','AdminController@updatepassword');

// Route::match(['get','post'],'/admin/add_category','CategoryController@addCategory'); });

// Route::get('/logout','AdminController@logout');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
