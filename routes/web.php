<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('architects-in-hosur',[HomeController::class, 'architectsInHosur'])->name('architects.in.hosur');
Route::get('architects-in-bangalore',[HomeController::class, 'architectsInBangalore'])->name('architects.in.bangalore');
Route::get('architects-in-chennai',[HomeController::class, 'architectsInChennai'])->name('architects.in.chennai');
Route::get('building-construction-contractors-hosur',[HomeController::class, 'buildingConstructionContractorsHosur'])->name('building.construction.contractors.hosur');
Route::get('building-construction-contractors-bangalore',[HomeController::class, 'buildingConstructionContractorsBangalore'])->name('building.construction.contractors.bangalore');
Route::get('building-construction-contractors-chennai',[HomeController::class, 'buildingConstructionContractorsChennai'])->name('building.construction.contractors.chennai');
Route::get('interior-designers-in-hosur',[HomeController::class, 'interiorDesignersInHosur'])->name('interior.designers.in.hosur');
Route::get('interior-designers-in-bangalore',[HomeController::class, 'interiorDesignersInBangalore'])->name('interior.designers.in.bangalore');
Route::get('interior-designers-in-chennai',[HomeController::class, 'interiorDesignersInChennai'])->name('interior.designers.in.chennai');
Route::get('house-construction-company-in-hosur',[HomeController::class, 'houseConstructionCompanyInHosur'])->name('house.construction.company.in.hosur');
Route::get('house-construction-company-in-bangalore',[HomeController::class, 'houseConstructionCompanyInBangalore'])->name('house.construction.company.in.bangalore');
Route::get('house-construction-company-in-chennai',[HomeController::class, 'houseConstructionCompanyInChennai'])->name('house.construction.company.in.chennai');
Route::get('contact-sales',[HomeController::class, 'contactSales'])->name('contact.sales');
Route::get('about-us',[HomeController::class, 'aboutUs'])->name('about.us');
Route::get('get-quote',[HomeController::class, 'getQuote'])->name('get.quote');
