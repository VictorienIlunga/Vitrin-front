<?php

use App\Http\Controllers\CapitalController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\routerController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function(){
    return view('home.index');
})->name('accueil');
Route::get('/contact', function(){
    return view('contact.contact');
})->name('contact');
Route::get('/apropos', function(){
    return view('apropos.apropos');
})->name('apropos');
Route::middleware('auth')->group(function () {

    Route::controller(routerController::class)->group(function(){
        Route::get('/', 'index')->name('dashboard');
        Route::get('/onglet', 'onglet')->name('onglet');
    });

    Route::controller(clientController::class)->group(function(){
        Route::get('/SearchClient', 'SearchClient')->name('SearchClient');
        Route::get('/ShowClient', 'show')->name('ShowClient');
        Route::post('/SavedClient', 'saved')->name('SavedClient');
        Route::get('/SignalerClient', 'SignalerClient')->name('SignalerClient');
    });

    Route::controller(CapitalController::class)->group(function(){
        Route::post('/OperationCapital', 'OperationCapital')->name('OperationCapital');
    });

    Route::controller(CreditController::class)->group(function(){
        Route::post('/OperationCredit', 'OperationCredit')->name('OperationCredit');
        Route::get('/payementCredit', 'payementCredit')->name('payementCredit');
    });

    Route::controller(ContratController::class)->group(function(){
        Route::get('/generatePDF/{id}', 'generatePDF')->name('generatePDF');
    });



    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
