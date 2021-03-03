<?php

use Illuminate\Support\Facades\Route;

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
//     return view('FrontOffice.Pages.home');
// });
Route::get('/', [App\Http\Controllers\FrontOfficeController::class, 'home'])->name('f-home');
Route::get('/nos-causes', [App\Http\Controllers\FrontOfficeController::class, 'causes'])->name('f-causes');
Route::get('/a-propos', [App\Http\Controllers\FrontOfficeController::class, 'about'])->name('f-about');
Route::get('/evenements', [App\Http\Controllers\FrontOfficeController::class, 'events'])->name('f-events');
Route::get('/actualite', [App\Http\Controllers\FrontOfficeController::class, 'blog'])->name('f-blog');
Route::get('/partenaire-volontaire', [App\Http\Controllers\FrontOfficeController::class, 'partners'])->name('f-partners');
Route::get('/contacts', [App\Http\Controllers\FrontOfficeController::class, 'contacts'])->name('f-contacts');
Route::post('/contacts/messages-create', [App\Http\Controllers\MessageController::class, 'store'])->name('f-message-create');
Route::get('/contacts/messages', [App\Http\Controllers\MessageController::class, 'create'])->name('f-message');


Route::get('/temoignage', [App\Http\Controllers\TestimonialController::class, 'create'])->name('f-temoignage');
Route::post('/temoignage-create', [App\Http\Controllers\TestimonialController::class, 'store'])->name('f-temoignage-create');

Route::get('/faire-un-don', [App\Http\Controllers\DonationController::class, 'create'])->name('f-donation');
Route::post('/faire-un-don-create', [App\Http\Controllers\DonationController::class, 'store'])->name('f-donation-create');



Route::get('/admin', [App\Http\Controllers\BackOffieController::class, 'dashboard'])->name('b-dashboard');
Route::get('/admin/infos-systems', [App\Http\Controllers\BackOffieController::class, 'systemInfos'])->name('b-system-infos');
Route::post('/admin/infos-systems-create', [App\Http\Controllers\InfosSystemController::class, 'store'])->name('b-system-infos-create');

Route::get('/admin/causes', [App\Http\Controllers\CauseController::class, 'create'])->name('b-causes');
Route::post('/admin/causes-create', [App\Http\Controllers\CauseController::class, 'store'])->name('b-causes-create');


Route::get('/admin/evenements', [App\Http\Controllers\EventController::class, 'create'])->name('b-events');
Route::post('/admin/evenements-create', [App\Http\Controllers\EventController::class, 'store'])->name('b-events-create');


Route::get('/admin/messages', [App\Http\Controllers\BackOffieController::class, 'messages'])->name('b-message');


Route::view('home', 'home')->middleware('auth');
