<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\fontend\HomepageController;

use App\Http\Controllers\fontend\SuscribeController;

use App\Http\Controllers\fontend\ProductsController;

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

Route::get('/', [HomepageController::class, 'index']);
Route::get('/', [ProducstsController::class, 'index']);
Route::get('/', [SuscribeController::class, 'index']);