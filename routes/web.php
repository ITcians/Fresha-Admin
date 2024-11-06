<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CatalogController;
use App\Http\Controllers\Admin\CategoriesController;

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SalesController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceTypeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/services',[HomeController::class,'service'])->name('service');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/about-us',[HomeController::class,'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('admin/profile',[ProfileController::class,'index'])->name('admin.profile.index');
    Route::get('admin/profile/edit',[ProfileController::class,'edit'])->name('admin.profile.edit');
    Route::post('admin/profile/update/{id}',[ProfileController::class,'update'])->name('admin.profile.update');

    
    Route::controller(ClientController::class)->group(function(){
        Route::get('admin/clients','index')->name('admin.client.index');
        Route::get('admin/create/client','create')->name('admin.client.create');
        Route::post('admin/store/client','store')->name('admin.client.store');
        Route::get('admin/edit/client/{id}','edit')->name('admin.client.edit');
        Route::post('admin/update/client/{id}','update')->name('admin.client.update');
        Route::delete('admin/update/client/{id}','destroy')->name('admin.client.destroy');
    });

    Route::get('admin/calendar',[CalendarController::class,'index'])->name('admin.calendar.index');
    Route::get('/api/calendar/events', [CalendarController::class, 'fetchEvents']);
    Route::get('/api/calendar/resources', [CalendarController::class, 'fetchResources']);

    Route::controller(BookingController::class)->group(function(){
        Route::post('admin/booking/store','storeBooking')->name('admin.booking.store');
    });


        Route::controller(SettingController::class)->group(function(){
        Route::get('admin/settings','index')->name('admin.setting.index');
        Route::get('admin/general-settings','generalSettings')->name('admin.setting.general');
        Route::get('admin/privacy-policy','PrivacyPolicy')->name('admin.privacy-policy');
        Route::post('admin/privacy-policy/store','storePrivacyPolicy')->name('admin.privacy_policy.store');
        Route::get('admin/terms-and-conditions','TermsAndConditions')->name('admin.terms-and-conditions');
        Route::post('admin/terms-and-conditions/store','storeTermsAndConditions')->name('admin.terms_and_conditions.store');
        Route::post('admin/site-setting/store','storeSiteSettings')->name('admin.site-setting.store');
        Route::post('admin/smtp-setting/store','storeSmtpSettings')->name('admin.smtp-setting.store');
        Route::get('admin/duration-hours','durationHours')->name('admin.duration-hours.index');
        Route::post('admin/store/duration-hours','durationHoursStore')->name('admin.duration-hour.store');
        Route::get('admin/branche-address','brancheAddressIndex')->name('admin.branche-address.index');
        Route::post('admin/store/branche-address','brancheAddressStore')->name('admin.branche-address.store');
    
    });


    Route::controller(ServiceController::class)->group(function(){
        Route::post('admin/service/store','ServiceStore')->name('admin.service.store');
        Route::get('admin/create/service','createService')->name('admin.service.create');
        Route::post('/store-variant', 'storeVariant');
        Route::post('/store-advance-options', 'storeAdvanceOptions');
        Route::post('/store-resource', 'storeResource');

        Route::get('/get-resources/{serviceId}', 'getResources');
        Route::post('/store-commission', 'storeCommission');

        Route::delete('/services/{id}',  'destroy');

    });


    Route::controller(ServiceTypeController::class)->group(function(){
         Route::get('admin/service-types','index')->name('admin.service-type.index');
         Route::get('admin/create/service-type','create')->name('admin.service-type.create');
         Route::post('admin/store/service-type','store');

          Route::post('admin/store/sub-service-type','SubServiceStore')->name('admin.sub-service.store');
    });
        
    

    // Catalog Route
    Route::get('admin/catalogs',[CatalogController::class,'index'])->name('admin.catelog.index');

    Route::controller(PackageController::class)->group(function(){

        Route::get('admin/create/package','create')->name('admin.package.create');
        Route::post('admin/store/package','store')->name('admin.package.store');
        Route::post('/store/service-package','StoreServicePackage');

    });



    Route::get('admin/create/category',[CategoryController::class,'create'])->name('admin.category.create');
    Route::post('admin/store/category',[CategoryController::class,'store'])->name('admin.category.store');


    Route::controller(SalesController::class)->group(function(){
        Route::get('admin/sales','index')->name('admin.sale.index');
        Route::get('admin/create/sale','create')->name('admin.sale.create');
        Route::post('admin/store/sale','store')->name('admin.sale.store');
        Route::get('admin/edit/sale/{id}','edit')->name('admin.sale.edit');
        Route::post('admin/update/sale/{id}','update')->name('admin.sale.update');
        Route::delete('admin/update/sale/{id}','destroy')->name('admin.sale.destroy');
    });

    Route::controller(TeamController::class)->group(function(){
        Route::get('admin/team','index')->name('admin.team.index');
        Route::get('admin/create/team','create')->name('admin.team.create');
        Route::post('admin/store/team','store')->name('admin.team.store');
        Route::get('admin/edit/team/{id}','edit')->name('admin.team.edit');
        Route::post('admin/update/team/{id}','update')->name('admin.team.update');
        // Route::delete('admin/update/team/{id}','destroy')->name('admin.team.destroy');
        Route::delete('/users/{id}', 'destroy')->name('users.destroy');

    });
});