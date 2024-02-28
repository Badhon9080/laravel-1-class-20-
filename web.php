<?php
use App\Http\Controllers\FrontendController;
//use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', function(){
    echo "Home";
});



Route::get('/about', function(){
    echo "About US";
});
*/
Route::get('/', [FrontendController::class, 'homepage'])->name('landing-page');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about');

//Route::get('/user', [UserController::class, 'getUser']);
//Route::get('/user/{name}', [UserController::class, 'getUser']);
//Route::get('/user/{id}', [UserController::class, 'getUser']);
Route::get('/user/{name}', [FrontendController::class, 'getUser'])->name('user');