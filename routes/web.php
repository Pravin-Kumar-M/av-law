<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home.index');
});


Route::get('/criminal-civil', [HomeController::class, 'criminalCivil'])->name('criminal_civil');

Route::get('/family-child', [HomeController::class, 'familyChild'])->name('family_child');

Route::get('/commercial', [HomeController::class, 'commercialRera'])->name('commercial');

Route::get('/finance-property', [HomeController::class, 'financeProperty'])->name('finance');

Route::get('/corporate', [HomeController::class, 'corporateMore'])->name('corporate');

// enquiry form
Route::post('/enquiry/submit', [HomeController::class, 'submit'])->name('enquiry.submit');
