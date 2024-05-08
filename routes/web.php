<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes Admin
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

//Disable register featured
Auth::routes(['register' => false]);

//Routes Admin Akses Dashboard
Route::group(['middleware' => ['is_admin','auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // destinations routes
    Route::resource('travel_packages', \App\Http\Controllers\Admin\TravelPackageController::class)->except('show');
    Route::resource('travel_packages.galleries', \App\Http\Controllers\Admin\GalleryController::class)->except(['create', 'index','show']);
    Route::resource('travel_packages.boats', \App\Http\Controllers\Admin\BoatController::class)->except(['create', 'index','show']);

    // categories blog routes
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->except('show');

    // blogs routes
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class)->except('show');

    // boats routes
    // Route::resource('boats', \App\Http\Controllers\Admin\BoatController::class)->except('show');

    // trips routes
    // Route::resource('trips', \App\Http\Controllers\Admin\TripController::class)->except('show');

    // profile routes
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    // web config routes
    Route::get('web-config', [\App\Http\Controllers\WebConfigController::class, 'show'])->name('web_config.show');
    Route::put('web-config', [\App\Http\Controllers\WebConfigController::class, 'update'])->name('web_config.update');
});

/*
|--------------------------------------------------------------------------
| Web Routes Frontend
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// home frontend routes
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');

// komodo routes
Route::get('destinations',[\App\Http\Controllers\TravelPackageController::class, 'index'])->name('travel_package.index');
Route::get('destinations/komodo',[\App\Http\Controllers\TravelPackageController::class, 'show'])->name('travel_package.show');
Route::get('destinations/komodo',[\App\Http\Controllers\TravelPackageController::class, 'show'])->name('travel_package.trip');
Route::get('trip/{trips:slug}',[\App\Http\Controllers\TravelPackageController::class, 'show'])->name('show.trip');
Route::get('open-trip-boat',[\App\Http\Controllers\TravelPackageController::class, 'showOpenTrip'])->name('show.open_trip.boat');
Route::get('private-trip-boat/silver',[\App\Http\Controllers\TravelPackageController::class, 'showPrivateTripSilver'])->name('show.private_trip.boat.silver');
Route::get('private-trip-boat/bronze',[\App\Http\Controllers\TravelPackageController::class, 'showPrivateTripBronze'])->name('show.private_trip.boat.bronze');
Route::get('private-trip-boat/gold',[\App\Http\Controllers\TravelPackageController::class, 'showPrivateTripGold'])->name('show.private_trip.boat.gold');
Route::get('book-private-trip',[\App\Http\Controllers\TravelPackageController::class, 'bookingPrivateTripKomodo'])->name('book.private_trip.komodo');
Route::get('boat-open-trip/komodo',[\App\Http\Controllers\TravelPackageController::class, 'boatShowOpenTrip'])->name('show.boat.open-trip');
Route::get('boat-private-trip/komodo',[\App\Http\Controllers\TravelPackageController::class, 'boatShowPrivateTrip'])->name('show.boat.private-trip');
// end komodo routes



// start sumba routes
Route::get('destinations/sumba',[\App\Http\Controllers\TravelPackageController::class, 'Sumba'])->name('travel_package.show.sumba');
Route::get('destinations/sumba',[\App\Http\Controllers\TravelPackageController::class, 'Sumba'])->name('travel_package.sumba');
Route::get('destinations/sumba',[\App\Http\Controllers\TravelPackageController::class, 'Sumba'])->name('show.trip.sumba');
Route::get('open-trip-boat/sumba',[\App\Http\Controllers\TravelPackageController::class, 'OpenTripSumba'])->name('show.open_trip.boat.sumba');
Route::get('private-trip-boat/silver/sumba',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripSilverSumba'])->name('show.private_trip.boat.silver.sumba');
Route::get('private-trip-boat/bronze/sumba',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripBronzeSumba'])->name('show.private_trip.boat.bronze.sumba');
Route::get('private-trip-boat/gold/sumba',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripGoldSumba'])->name('show.private_trip.boat.gold.sumba');
Route::get('book-private-trip/sumba',[\App\Http\Controllers\TravelPackageController::class, 'bookingPrivateTripSumba'])->name('book.private_trip.sumba');
Route::get('boat-open-trip/sumba',[\App\Http\Controllers\TravelPackageController::class, 'boatOpenTripSumba'])->name('show.boat.open-trip.sumba');
Route::get('boat-private-trip/sumba',[\App\Http\Controllers\TravelPackageController::class, 'boatPrivateTripSumba'])->name('show.boat.private-trip.sumba');
// end sumba routes


// start waerebo routes
Route::get('destinations/waerebo',[\App\Http\Controllers\TravelPackageController::class, 'Waerebo'])->name('travel_package.show.waerebo');
Route::get('destinations/waerebo',[\App\Http\Controllers\TravelPackageController::class, 'Waerebo'])->name('travel_package.waerebo');
Route::get('destinations/waerebo',[\App\Http\Controllers\TravelPackageController::class, 'Waerebo'])->name('show.trip.waerebo');
Route::get('open-trip-boat/waerebo',[\App\Http\Controllers\TravelPackageController::class, 'OpenTripWaerebo'])->name('show.open_trip.boat.waerebo');
Route::get('private-trip-boat/silver/waerebo',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripSilverWaerebo'])->name('show.private_trip.boat.silver.waerebo');
Route::get('private-trip-boat/bronze/waerebo',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripBronzeWaerebo'])->name('show.private_trip.boat.bronze.waerebo');
Route::get('private-trip-boat/gold/waerebo',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripGoldWaerebo'])->name('show.private_trip.boat.gold.waerebo');
Route::get('book-private-trip/waerebo',[\App\Http\Controllers\TravelPackageController::class, 'bookingPrivateTripWaerebo'])->name('book.private_trip.waerebo');
Route::get('boat-open-trip/waerebo',[\App\Http\Controllers\TravelPackageController::class, 'boatOpenTripWaerebo'])->name('show.boat.open-trip.waerebo');
Route::get('boat-private-trip/waerebo',[\App\Http\Controllers\TravelPackageController::class, 'boatPrivateTripWaerebo'])->name('show.boat.private-trip.waerebo');
// end waerebo routes


// start raja-ampat routes
Route::get('destinations/raja-ampat',[\App\Http\Controllers\TravelPackageController::class, 'rajaAmpat'])->name('travel_package.show.raja-ampat');
Route::get('destinations/raja-ampat',[\App\Http\Controllers\TravelPackageController::class, 'rajaAmpat'])->name('travel_package.raja-ampat');
Route::get('destinations/raja-ampat',[\App\Http\Controllers\TravelPackageController::class, 'rajaAmpat'])->name('show.trip.raja-ampat');
Route::get('open-trip-boat/raja-ampat',[\App\Http\Controllers\TravelPackageController::class, 'OpenTripRajaAmpat'])->name('show.open_trip.boat.raja-ampat');
Route::get('private-trip-boat/silver/raja-ampat',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripSilverRajaAmpat'])->name('show.private_trip.boat.silver.raja-ampat');
Route::get('private-trip-boat/bronze/raja-ampat',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripBronzeRajaAmpat'])->name('show.private_trip.boat.bronze.raja-ampat');
Route::get('private-trip-boat/gold/raja-ampat',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripGoldRajaAmpat'])->name('show.private_trip.boat.gold.raja-ampat');
Route::get('book-private-trip/raja-ampat',[\App\Http\Controllers\TravelPackageController::class, 'bookingPrivateTripRajaAmpat'])->name('book.private_trip.raja-ampat');
Route::get('boat-open-trip/raja-ampat',[\App\Http\Controllers\TravelPackageController::class, 'boatOpenTripRajaAmpat'])->name('show.boat.open-trip.raja-ampat');
Route::get('boat-private-trip/raja-ampat',[\App\Http\Controllers\TravelPackageController::class, 'boatPrivateTripRajaAmpat'])->name('show.boat.private-trip.raja-ampat');
// end raja-ampat routes


// start flores routes
Route::get('destinations/flores',[\App\Http\Controllers\TravelPackageController::class, 'Flores'])->name('travel_package.show.flores');
Route::get('destinations/flores',[\App\Http\Controllers\TravelPackageController::class, 'Flores'])->name('travel_package.flores');
Route::get('destinations/flores',[\App\Http\Controllers\TravelPackageController::class, 'Flores'])->name('show.trip.flores');
Route::get('open-trip-boat/flores',[\App\Http\Controllers\TravelPackageController::class, 'OpenTripFlores'])->name('show.open_trip.boat.flores');
Route::get('private-trip-boat/silver/flores',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripSilverFlores'])->name('show.private_trip.boat.silver.flores');
Route::get('private-trip-boat/bronze/flores',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripBronzeFlores'])->name('show.private_trip.boat.bronze.flores');
Route::get('private-trip-boat/gold/flores',[\App\Http\Controllers\TravelPackageController::class, 'PrivateTripGoldFlores'])->name('show.private_trip.boat.gold.flores');
Route::get('book-private-trip/flores',[\App\Http\Controllers\TravelPackageController::class, 'bookingPrivateTripFlores'])->name('book.private_trip.flores');
Route::get('boat-open-trip/flores',[\App\Http\Controllers\TravelPackageController::class, 'boatOpenTripFlores'])->name('show.boat.open-trip.flores');
Route::get('boat-private-trip/flores',[\App\Http\Controllers\TravelPackageController::class, 'boatPrivateTripFlores'])->name('show.boat.private-trip.flores');
// end flores routes


// blogs frontend routes
Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('blogs/{blog:slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('blogs/category/{category:slug}', [\App\Http\Controllers\BlogController::class, 'category'])->name('blog.category');

// contact frontend routes
Route::get('contact', function() {
    return view('contact');
})->name('contact');

// faqs feontend routes
Route::get('faqs', function() {
    return view('faqs');
})->name('faqs');

// organization schema frontend routes
Route::get('/organization-schema', [App\Http\Controllers\GoogleSearchController::class, 'organizationSchema']);
