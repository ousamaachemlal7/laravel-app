<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputersController;
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

Route::get('/', [StaticController::class,'index'])->name('home.index');
Route::get('/about', [StaticController::class,'about'])->name('home.about');
//Route::get('/portfolio', [StaticController::class,'portfolio']);
Route::get('/contact', [StaticController::class,'contact'])->name('home.contact');
Route::resource('computers', ComputersController::class);

/*
Route::get('/store', function () {
    $filter = request('style');
    if(isset($filter)){
        return 'this page is viewing <span style="color:red">'.strip_tags($filter).'</span>';
    }
    return 'this page is viewing <span style="color:red">  all products </span>';
});
*/

Route::get('/store/{catergory?}/{item?}', function ($category=null,$item=null) {
    if(isset($category)){
        if(isset($item)){
            return '<h1>'.$item.'</h1>';
        }
        return '<h1>'.$category.'</h1>';
    }
    return '<h1> STORE </h1>';
});