<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/AboutUs', function () {
    return view('AboutUs');
});

Route::get('/nav', function () {
    return view('navigation');
});


Route::get('/', function () {
    return view('Welcome');
});

Route::get('/Results', function () {
    return view('Searchresults');
});

Route::get('/Advertise', function () {
    return view('Advertise');
});

Route::get('/BuyerProtection', function () {
    return view('BuyerProtection');
});

Route::get('/Careers', function () {
    return view('CareersOpportunities');
});

Route::get('/Cart', function () {
    return view('Cartpage');
});

Route::get('/Purchase/1', function () {
    return view('CartpagePurchasestep1');
});

Route::get('/Purchase/5', function () {
    return view('Confirmation');
});

Route::get('/ContactUs', function () {
    return view('ContactUS');
});
Route::get('/Cooperate', function () {
    return view('Cooperation');
});
Route::get('/CustomerInfo', function () {
    return view('Customerinformation');
});
Route::get('/Purchase/4', function () {
    return view('DeliveryandPayment');
});
Route::get('/Purchase/3', function () {
    return view('DeliveryInformation');
});

Route::get('/DeliveryPartners', function () {
    return view('DeliveryOptions');
}); 

Route::get('/FAQs', function () {
    return view('FAQs');
});
Route::get('/Passwordreset', function () {
    return view('ForgotPassword');
});
Route::get('/PaymentPartners', function () {
    return view('MakingPayments');
});
Route::get('/UserGuide', function () {
    return view('NewUser');
});
Route::get('/PrivacyPolicy', function () {
    return view('Privacy Policy');
});
Route::get('/Display', function () {
    return view('Productpage');
});

Route::get('/Selling', function () {
    return view('SellingProgram');
});
Route::get('/Purchase/5', function () {
    return view('Confirmation');
});
Route::get('/Purchase/5', function () {
    return view('Confirmation');
});
Route::get('/Purchase/5', function () {
    return view('Confirmation');
});

Route::get('/Wishlist', function () {
    return view('wishlist');
});




// routes to product page
Route::get('/product/{id}/{slug}', [ProductController::class, 'show']);

Route::get('/dashboard', function () {
    return view('welcome'); //The Content of the website is unchanged whether the user is signed in or not, it is the layout file which will be affected. Hence merged
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

