<?php

use App\Http\Livewire\UserComponent;
use App\Http\Livewire\UserEditeComponent;
use App\Http\Livewire\ConsultationComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logoutCreateController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user',UserComponent::class)->name('espace.user');
Route::get('/createuser',[logoutCreateController::class, 'logoutCreate'])->name('logoutCreate');
Route::get('/info',ConsultationComponent::class)->name('info.user')->middleware('auth');
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/user_edit',UserEditeComponent::class)->name('espace.useredite');

});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
