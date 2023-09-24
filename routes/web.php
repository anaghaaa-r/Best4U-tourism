<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationPackageController;
use App\Http\Controllers\DetailViewsController;
use App\Http\Controllers\DubaiSpecialPackageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TourismController;
use App\Http\Controllers\TourismPackageController;
use App\Http\Controllers\ViewsManageController;
use Illuminate\Support\Facades\Route;



// client
Route::get('/', [ViewsManageController::class, 'viewIndex']);

Route::get('/aboutus', [ViewsManageController::class, 'viewAboutUs']);

Route::get('/service-detail/{id}', [DetailViewsController::class, 'viewService']);

Route::get('/destination/{id}', [DetailViewsController::class, 'viewDestinations']);

Route::get('/destination/{destinationId}/package/{packageId}', [DetailViewsController::class, 'viewDestinationPackages'])->name('destination.package');

Route::get('/tourismpackage/{id}', [DetailViewsController::class, 'viewTourism']);

Route::get('/dubaispecialpackage', [ViewsManageController::class, 'viewDubai']);

Route::get('/contactus', [ViewsManageController::class, 'viewContactUs']);

Route::get('/blog', [ViewsManageController::class, 'viewBlog']);






// admin get methods

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth');



// destinations get
Route::get('/admin/destinations', [DestinationController::class, 'view']);
Route::get('/admin/destinations/package/{id}', [DestinationPackageController::class, 'view']);

// destinations post and delete
Route::post('/destination/add', [DestinationController::class, 'create'])->name('add.destination');
Route::post('/destination/edit/{id}', [DestinationController::class, 'edit'])->name('edit.destination');
Route::delete('/destination/delete/{id}', [DestinationController::class, 'delete'])->name('delete.destination');

// destination packages post and delete
Route::post('/destinationpackage/add/{id}', [DestinationPackageController::class, 'createPackage'])->name('add.destination.package');
Route::post('/destination/{destinationId}/package/{packageId}/update', [DestinationPackageController::class, 'editPackage'])->name('edit.destination.package');
Route::delete('/destination/{destinationId}/package/{packageId}/delete', [DestinationPackageController::class, 'deletePackage'])->name('delete.destination.package');



// tourism packages get
Route::get('/admin/tourismpackages', [TourismController::class, 'view']); 
Route::get('/admin/tourismpackages/package/{id}', [TourismPackageController::class, 'view']);

// tourism post and delete
Route::post('/tourism/add', [TourismController::class, 'create'])->name('add.tourism');
Route::post('/tourism/edit/{id}', [TourismController::class, 'edit'])->name('edit.tourism');
Route::delete('/tourism/delete/{id}', [TourismController::class, 'delete'])->name('delete.tourism');

// tourism packages post and delete
Route::post('/tourismpackage/add/{id}', [TourismPackageController::class, 'createPackage'])->name('add.tourism.package');
Route::post('/tourism/{tourismId}/package/{packageId}/update', [TourismPackageController::class, 'editPackage'])->name('edit.tourism.package');
Route::delete('/tourism/{tourismId}/package/{packageId}/delete', [TourismPackageController::class, 'deletePackage'])->name('delete.tourism.package');


// dubai special package get
Route::get('/admin/dubaispecialpackages', [DubaiSpecialPackageController::class, 'view']);

// dubai special package post and delete
Route::post('/dubaispecialpackage/add', [DubaiSpecialPackageController::class, 'create'])->name('add.dubaispecialpackage');
Route::post('/dubaispecialpackage/edit/{id}', [DubaiSpecialPackageController::class, 'edit'])->name('edit.dubaispecialpackage');
Route::delete('/dubaispecialpackage/delete/{id}', [DubaiSpecialPackageController::class, 'delete'])->name('delete.dubaispecialpackage');


// services
Route::get('/admin/services', [ServiceController::class, 'view']);

// service post and delete
Route::post('/service/add', [ServiceController::class, 'create'])->name('add.service');
Route::post('/service/edit/{id}', [ServiceController::class, 'edit'])->name('edit.service');
Route::delete('/service/delete/{id}', [ServiceController::class, 'delete'])->name('delete.service');






// admin post methods
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
