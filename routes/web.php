<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\ShowResultsController;
use App\Http\Controllers\PDFController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');   

Route::group(['middleware' => ['auth','isAdmin']], function () {
    Route::prefix('admin')->group(function () {
            Route::resource('users', UsersController::class);
            Route::delete('/user/delete/{id}', [UsersController::class, 'destroy'])->name('deleteuser');
            Route::delete('/test/delete/{id}', [TestsController::class, 'destroy'])->name('deletetest');
            Route::delete('/result/delete/{id}', [ResultsController::class, 'destroy'])->name('deleteresult');
        Route::resource('admins', AdminsController::class);
        Route::resource('patients', PatientsController::class);
        Route::resource('doctors', DoctorsController::class);
        Route::resource('tests', TestsController::class);
        Route::resource('results', ResultsController::class);
    });
});
Route::group(['middleware' => ['auth','isDoctor']], function () {
    Route::get('/showresults/patient/{id}',[ShowResultsController::class,'index']);
    Route::prefix('doctor')->group(function () {
        Route::get('/showresults/patient/{id}/result/{date}',[ShowResultsController::class,'show'])->name('showresults');
    });
    });

    Route::group(['middleware' => ['auth','isPatient']], function () {
        Route::get('/showresults/patient/{id}/result/{date}',[ShowResultsController::class,'show'])->name('showresults');
        Route::prefix('patient')->group(function () {
            Route::get('/home', function () {
                    return view('home');
                });
            });
    });
    Route::get('generate-invoice-pdf/{id}/{date}', array('as'=> 'generate.invoice.pdf', 'uses' => 'App\Http\Controllers\PDFController@generateInvoicePDF'));
