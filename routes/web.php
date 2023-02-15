<?php


use App\Models\data;
//added
use App\Models\Article;
use App\Mail\MailPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
//end added

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



/*Route::get('/register', function () {
    return view('welcome');
});
*/
Route::get('/', function(){
    return view('create');
});

//routes for pageController (content page)
Route::resource('pagecontent', App\Http\Controllers\pageController::class);
//for form (argument from createController)
Route::get('create', [App\Http\Controllers\createController::class, 'create'])->name('create');
Route::POST('register', [App\Http\Controllers\createController::class, 'register'])->name('register');
//signin route
Route::get('signin', [App\Http\Controllers\createController::class, 'signin'])->name('signin');
Route::POST('authenticate', [App\Http\Controllers\createController::class, 'authenticate'])->name('authenticate');

/*
Route::get('/', [MailController::class, 'sendMail']);
*/

Route::get('/send', [MailController::class,'index']);
Route::post('processData', [App\Http\Controllers\AuthController::class, 'processData'])->name('processData');




