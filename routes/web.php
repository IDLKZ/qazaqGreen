<?php

use App\Http\Controllers\FrontController;
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
    Route::get('/', [FrontController::class, 'index'])->name('main');
    Route::group(['prefix' => 'about'], function(){
        Route::get('/vie', [FrontController::class, 'vie'])->name('vie');
        Route::get('/law', [FrontController::class, 'law'])->name('law');
        Route::get('/material', [FrontController::class, 'material'])->name('material');
    });
    Route::get('about-association', [FrontController::class, 'aboutAssociation'])->name('aboutAssociation');
    Route::group(['prefix' => 'associations-new'], function(){
        Route::get('/news', [FrontController::class, 'news'])->name('front-news');
        Route::get('/smi', [FrontController::class, 'smi'])->name('front-smi');
    });
    Route::get('/event', [FrontController::class, 'event'])->name('front-event');
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
