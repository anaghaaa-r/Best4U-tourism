<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
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

Route::get('/tourismpackage/{tourismId}/package/{packageId}', [DetailViewsController::class, 'viewTourismPackages'])->name('tourism.package');

Route::get('/dubaispecialpackages', [DetailViewsController::class, 'viewDubai'])->name('dubaispecial');

Route::get('/dubaispecialpackage/{id}', [DetailViewsController::class, 'viewDubaiPackages'])->name('dubaispecialpackage');

Route::get('/contactus', [ViewsManageController::class, 'viewContactUs']);

Route::get('/blog', [ViewsManageController::class, 'viewBlog']);

Route::get('/blog/{id}', [ViewsManageController::class, 'viewBlogDetails'])->name('blog.read');

// user form submissions
// Contact Forms
Route::post('/home/booking', [BookingController::class, 'homeBooking'])->name('home.booking');
Route::post('/service/enquiry/{id}', [BookingController::class, 'serviceBooking'])->name('service.enquiry');
Route::post('/package/enquiry', [BookingController::class, 'packageBooking'])->name('package.enquiry');
Route::post('/tourism/enquiry/{id}', [BookingController::class, 'tourismBooking'])->name('tourism.enquiry');
Route::post('dubai/enquiry', [BookingController::class, 'dubaiBooking'])->name('dubai.enquiry');
Route::post('/contactus', [BookingController::class, 'contactUsForm'])->name('contact.us');



// admin methods

Route::view('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::post('/login', [AuthController::class, 'login'])->name('admin.login');


// admin middleware
Route::middleware('auth')->group(function () {

    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // dashboard
    Route::view('/admin/dashboard', 'admin.dashboard')->name('dashboard');

    // add packages
    Route::get('/admin/packages', [ViewsManageController::class, 'toAdmin']);

    // destinations get
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
    Route::get('/admin/tourismpackages/package/{id}', [TourismPackageController::class, 'view']);

    // tourism post and delete
    Route::post('/tourism/add', [TourismController::class, 'create'])->name('add.tourism');
    Route::post('/tourism/edit/{id}', [TourismController::class, 'edit'])->name('edit.tourism');
    Route::delete('/tourism/delete/{id}', [TourismController::class, 'delete'])->name('delete.tourism');

    // tourism packages post and delete
    Route::post('/tourismpackage/add/{id}', [TourismPackageController::class, 'createPackage'])->name('add.tourism.package');
    Route::post('/tourism/{tourismId}/package/{packageId}/update', [TourismPackageController::class, 'editPackage'])->name('edit.tourism.package');
    Route::delete('/tourism/{tourismId}/package/{packageId}/delete', [TourismPackageController::class, 'deletePackage'])->name('delete.tourism.package');


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


    // blog get methods
    Route::get('/admin/blog', [BlogController::class, 'view']);
    Route::get('/blog-details/{id}', [BlogController::class, 'viewBlog'])->name('blog.details');


    // blog post and delete methods
    Route::post('/blog/add', [BlogController::class, 'create'])->name('add.blog');
    Route::post('/blog/update/preview/{id}', [BlogController::class, 'updatePreview'])->name('edit.blog.preview');
    Route::post('/blog/update/{id}', [BlogController::class, 'updateDetails'])->name('update.blog');
    Route::delete('/blog/delete/{id}', [BlogController::class, 'delete'])->name('delete.blog');
});

