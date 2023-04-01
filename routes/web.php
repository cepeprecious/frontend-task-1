<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'homepage']);
Route::get('/about_us', [PageController::class, 'about_us']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/careers', [PageController::class, 'careers']);
Route::get('/employers', [PageController::class, 'employers']);
Route::get('/contact_us', [PageController::class, 'contact_us']);
Route::get('/application', [PageController::class, 'application']);
