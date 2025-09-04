<?php

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

$team = [
    ['name' => 'Hodor', 'position' => 'programmer'],
    ['name' => 'Joker', 'position' => 'CEO'],
    ['name' => 'Elvis', 'position' => 'CTO'],
];

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about', ['team' => $team])->name('about');

// Route::match(['get', 'post'], '/about', function () {
//     return view('about');
// })->name('about');

// Route::any('about', function () {
//     return view('about');
// })->name('about');

Route::redirect('/a' , 'about');

Route::permanentRedirect('/b', '/a');

