<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function(){
    Route::get("/", [ItemController::class, "index"]);
    Route::get("/create", [ItemController::class, "create"])->name("create");
    Route::post("/store", [ItemController::class, "store"])->name("store");
    Route::get("/edit/{id}", [ItemController::class, "edit"])->name("edit");
    Route::post("/update/{id}", [ItemController::class, "update"])->name("update");
    Route::delete("/destroy/{id}", [ItemController::class, "destroy"])->name("destroy");
});
