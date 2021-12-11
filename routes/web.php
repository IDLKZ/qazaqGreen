<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {
    Route::get('/', function () {return view('welcome');});


    });


Auth::routes(["register"=>false]);
Route::group(["middleware"=>"auth"],function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('sliders', App\Http\Controllers\SliderController::class);
    Route::resource('tasks', App\Http\Controllers\TaskController::class);
    Route::resource('partners', App\Http\Controllers\PartnerController::class);
    Route::resource('abouts', App\Http\Controllers\AboutController::class);
    Route::resource('positions', App\Http\Controllers\PositionController::class);
    Route::resource('teams', App\Http\Controllers\TeamController::class);
    Route::resource('positionTeams', App\Http\Controllers\PositionTeamController::class);
    Route::resource('news', App\Http\Controllers\NewsController::class);
    Route::resource('magazines', App\Http\Controllers\MagazineController::class);
    Route::resource('events', App\Http\Controllers\EventController::class);
    Route::resource('categoryDocuments', App\Http\Controllers\CategoryDocumentController::class);
    Route::resource('documents', App\Http\Controllers\DocumentController::class);
    Route::resource('categoryDocumentRels', App\Http\Controllers\CategoryDocumentRelController::class);
    Route::resource('contacts', App\Http\Controllers\ContactController::class);
});

Route::post('ckeditor/upload', [AdminController::class,"upload"])->name('ckeditor.upload');


Route::resource('aboutuses', App\Http\Controllers\AboutUsController::class);
