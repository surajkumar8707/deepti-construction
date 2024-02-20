<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\SocialMediaLinkController;
use App\Http\Controllers\Admin\AppSettingController;
use App\Http\Controllers\Admin\ManageFrontEndContentController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\QuoteController;

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


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::group(["middleware" => ["guest:admin"]], function() {
        Route::controller(LoginController::class)->group(function() {
            Route::get('/login', 'showAdminLoginForm')->name('login_page');
            Route::post('/login', 'adminLogin')->name('login');
        });
    });
    Route::group(["middleware" => "auth:admin"], function () {
        Route::controller(AdminHomeController::class)->group(function() {
            Route::get("/dashboard", "index")->name("dashboard");
        });
        Route::post('/logout', [LoginController::class, 'adminLogout'])->name('logout');

        // ---Social Media Links---
        Route::group(['prefix' => 'social-media', 'as' => 'social.media.'], function () {
            Route::controller(SocialMediaLinkController::class)->group(function() {
                Route::get("/show", "show")->name("show");
                Route::get("/create", "create")->name("create");
                Route::post("/storeOrUpdate", "storeOrUpdate")->name("storeOrUpdate");
            });
        });

        Route::group(['prefix' => 'app', 'as' => 'app.'], function () {
            Route::controller(AppSettingController::class)->group(function() {
                Route::get("/setting", "setting")->name("setting");
                Route::post("/setting-update", "settingUpdate")->name("setting.update");
            });
        });

        Route::group(['prefix' => 'manage-front-end-content', 'as' => 'manage.front.end.content.'], function () {
            Route::controller(ManageFrontEndContentController::class)->group(function() {
                Route::get("/", "index")->name("index");
                Route::get("/get-page-detail/{page}", "getPageDetail")->name("get.page.detail");
                Route::get("/delete-faq-detail/{faq_id}", "deleteFaqDetail")->name("delete.faq.detail");
                Route::post("/store", "store")->name("store");
                Route::put("/update/{id}", "update")->name("update");
            });
        });

        Route::group(['prefix' => 'contact-us', 'as' => 'contact.us.'], function () {
            Route::controller(ContactUsController::class)->group(function() {
                Route::get("/", "index")->name("index");
            });
        });

        Route::group(['prefix' => 'quote', 'as' => 'quote.'], function () {
            Route::controller(QuoteController::class)->group(function() {
                Route::get("/", "index")->name("index");
            });
        });

        //---users---
        // Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        //     Route::controller(UserController::class)->group(function() {
        //         Route::get("/", "index")->name("index");
        //     });
        // });
    });
});

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('architects-in-lucknow',[HomeController::class, 'architectsInHosur'])->name('architects.in.hosur');
Route::get('architects-in-gorakpur',[HomeController::class, 'architectsInBangalore'])->name('architects.in.bangalore');
Route::get('architects-in-allahabaad',[HomeController::class, 'architectsInChennai'])->name('architects.in.chennai');
Route::get('building-construction-contractors-lucknow',[HomeController::class, 'buildingConstructionContractorsHosur'])->name('building.construction.contractors.hosur');
Route::get('building-construction-contractors-gorakpur',[HomeController::class, 'buildingConstructionContractorsBangalore'])->name('building.construction.contractors.bangalore');
Route::get('building-construction-contractors-allahabaad',[HomeController::class, 'buildingConstructionContractorsChennai'])->name('building.construction.contractors.chennai');
Route::get('interior-designers-in-lucknow',[HomeController::class, 'interiorDesignersInHosur'])->name('interior.designers.in.hosur');
Route::get('interior-designers-in-gorakpur',[HomeController::class, 'interiorDesignersInBangalore'])->name('interior.designers.in.bangalore');
Route::get('interior-designers-in-allahabaad',[HomeController::class, 'interiorDesignersInChennai'])->name('interior.designers.in.chennai');
Route::get('house-construction-company-in-lucknow',[HomeController::class, 'houseConstructionCompanyInHosur'])->name('house.construction.company.in.hosur');
Route::get('house-construction-company-in-gorakpur',[HomeController::class, 'houseConstructionCompanyInBangalore'])->name('house.construction.company.in.bangalore');
Route::get('house-construction-company-in-allahabaad',[HomeController::class, 'houseConstructionCompanyInChennai'])->name('house.construction.company.in.chennai');
Route::get('renovation-contractors-in-lucknow',[HomeController::class, 'renovationContractorsInHosur'])->name('renovation.contractors.in.hosur');
Route::get('house-renovation-contractors-gorakpur',[HomeController::class, 'houseRenovationContractorsBangalore'])->name('house.renovation.contractors.bangalore');
Route::get('house-renovation-contractors-allahabaad',[HomeController::class, 'houseRenovationContractorsChennai'])->name('house.renovation.contractors.chennai');
Route::get('contact-sales',[HomeController::class, 'contactSales'])->name('contact.sales');
Route::post('contact-save',[HomeController::class, 'contactSave'])->name('contact.save');
Route::get('thank-you',[HomeController::class, 'thankYou'])->name('thank.you');
Route::get('about-us',[HomeController::class, 'aboutUs'])->name('about.us');
Route::get('privacy-policy',[HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('terms-conditions',[HomeController::class, 'termsConditions'])->name('terms.conditions');
Route::get('get-quote',[HomeController::class, 'getQuote'])->name('get.quote');
Route::post('quote-save',[HomeController::class, 'quoteSave'])->name('quote.save');
