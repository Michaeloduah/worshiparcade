<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Models\News;
use App\Models\User;
use App\Models\Event;
use App\Models\Prayer;
use App\Models\Payment;
use App\Models\Devotional;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PrayerController;
use App\Http\Controllers\SermonController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DevotionalController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('', [DashboardController::class, 'home'])->name('home');



Auth::routes(['verify' => true]);

Route::middleware('auth', 'verified')->group(function () {


    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('approve/{id}', [PaymentController::class, 'approve'])->name('approve');
        Route::get('decline/{id}', [PaymentController::class, 'decline'])->name('decline');

        Route::name('sermon.')->prefix('sermon')->group(function () {
            Route::get('', [SermonController::class, 'index'])->name('index');
            Route::get('create-sermon', [SermonController::class, 'create'])->name('create-sermon');
            Route::post('sermon', [SermonController::class, 'store'])->name('sermons');
        });

        Route::name('news.')->prefix('news')->group(function () {
            Route::get('', [NewsController::class, 'index'])->name('index');
            Route::get('add-news', [NewsController::class, 'create'])->name('add-news');
            Route::get('show-news/{slug}', [NewsController::class, 'show'])->name('show-news');
            Route::post('news', [NewsController::class, 'store'])->name('news');
            Route::get('edit-news/{id}', [NewsController::class, 'edit'])->name('edit-news');
            Route::post('edit-news/{id}', [NewsController::class, 'update'])->name('update-news');
            Route::get('{id}', [NewsController::class, 'destroy'])->name('delete-news');
        });

        Route::name('event.')->prefix('event')->group(function () {
            Route::get('', [EventController::class, 'index'])->name('index');
            Route::get('add-event', [EventController::class, 'create'])->name('add-event');
            Route::post('event', [EventController::class, 'store'])->name('events');
            Route::get('edit-event/{id}', [EventController::class, 'edit'])->name('edit-event');
            Route::post('edit-event/{id}', [EventController::class, 'update'])->name('update-event');
            Route::get('{id}', [EventController::class, 'destroy'])->name('delete-event');
        });

        Route::name('event-category.')->prefix('event-category')->group(function () {
            Route::get('', [EventCategoryController::class, 'index'])->name('index');
            Route::get('add-event-category', [EventCategoryController::class, 'create'])->name('eventCategory');
            Route::post('eventCategory', [EventCategoryController::class, 'store'])->name('eventCategories');
            Route::get('edit-event-category/{id}', [EventCategoryController::class, 'edit'])->name('edit-event-category');
            Route::post('edit-event-category/{id}', [EventCategoryController::class, 'update'])->name('update-event-category');
            Route::get('{id}', [EventCategoryController::class, 'destroy'])->name('delete-event');
        });

        Route::name('payment.')->prefix('payment')->group(function () {
            Route::get('', [DashboardController::class, 'payment'])->name('index');
            Route::get('offering', [DashboardController::class, 'offering'])->name('offering');
            Route::get('tithe', [DashboardController::class, 'tithe'])->name('tithe');
            Route::get('church-project', [DashboardController::class, 'churchProject'])->name('church-project');
            Route::get('prophetic-seed', [DashboardController::class, 'propheticSeed'])->name('prophetic-seed');
        });

        Route::name('devotion.')->prefix('devotion')->group(function () {
            Route::get('', [DevotionalController::class, 'index'])->name('index');
            Route::get('add-devotion', [DevotionalController::class, 'create'])->name('add-devotion');
            Route::post('devotion', [DevotionalController::class, 'store'])->name('devotion');
            Route::get('edit-devotion/{id}', [DevotionalController::class, 'edit'])->name('edit-devotion');
            Route::post('edit-devotion/{id}', [DevotionalController::class, 'update'])->name('update-devotion');
            Route::get('{id}', [DevotionalController::class, 'destroy'])->name('delete-devotion');
        });

        Route::name('prayer.')->prefix('prayer')->group(function () {
            Route::get('', [PrayerController::class, 'index'])->name('index');
            Route::get('add-prayer', [PrayerController::class, 'create'])->name('add-prayer');
            Route::post('prayer', [PrayerController::class, 'store'])->name('prayer');
            Route::get('edit-prayer/{id}', [PrayerController::class, 'edit'])->name('edit-prayer');
            Route::post('edit-prayer/{id}', [PrayerController::class, 'update'])->name('update-prayer');
            Route::get('{id}', [PrayerController::class, 'destroy'])->name('delete-prayer');
        });
    });

    Route::name('user.')->prefix('user')->group(function () {
        Route::get('payment', [PaymentController::class, 'create'])->name('payment');
        Route::post('payment', [PaymentController::class, 'store'])->name('pay');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Temporaray View files 
Route::view('/about-us', 'pages.about-us');
Route::view('/Devotional-detail', 'pages.blog-detail');
Route::view('/Devotional', 'pages.blog');
Route::view('/contact', 'pages.contact-us');
Route::view('/give', 'pages.donation-page');
Route::view('/event-details', 'pages.event-detail');
Route::view('/events', 'pages.events');
Route::view('/our-ministries', 'pages.our-ministries');
Route::view('/pastor-detail', 'pages.pastor-detail');
Route::view('/product-detail', 'pages.product-detail');
Route::view('/sermon-detail', 'pages.sermon-detail');
Route::view('/sermons', 'pages.sermons');
Route::view('/shop', 'pages.shop');