<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Not Routeları
    Route::get('/notes',[NotesController::class,'index'])->name('notes_index');
    Route::get('/notes/create',[NotesController::class,'create'])->name('notes_create');
    Route::post('/notes/store',[NotesController::class,'store'])->name('notes_store');
    Route::get('/notes/detail/{uuid}',[NotesController::class,'show'])->name('notes_show');
    Route::get('/notes/edit/{uuid}',[NotesController::class,'edit'])->name('notes_edit');
    Route::post('/notes/update',[NotesController::class,'update'])->name('notes_update');
    Route::get('/notes/delete/{uuid}',[NotesController::class,'destroy'])->name('notes_delete');
});

Route::get('/', function (){
    return view('front.welcome');
})->name('welcome');
/*Route::get('/', function (){
    return view('front.notlar.deneme');
})->name('welcome');*/
