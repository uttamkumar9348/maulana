<?php

use App\Helpers\PaymentGateway;

use App\Http\Controllers\Web\CourseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\ApplicationController;
use App\Http\Controllers\Web\EventController;
use App\Http\Controllers\Web\FaqController;
use App\Http\Controllers\Web\GalleryController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\TeamController;
use App\Http\Controllers\FrontWeb\DashboardController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontwebuser\DashbController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/******************LOGIN PAGE ROUTES START****************/

// Web Routes
Route::middleware(['XSS'])->namespace('Web')->group(function () {

  // Home Route
  Route::get('/', [HomeController::class, 'index'])->name('home');
  // Course Route
  Route::get('/course', [CourseController::class, 'index'])->name('course');
  Route::get('/course/{slug}', [CourseController::class, 'show'])->name('course.single');
  // Event Route
  Route::get('/event', [EventController::class, 'index'])->name('event');
  Route::get('/event/{id}/{slug}', [EventController::class, 'show'])->name('event.single');
  // Faq Route
  Route::get('/faq', [FaqController::class, 'index'])->name('faq');
  // Gallery Route
  Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
  // News Route
  Route::get('/news', [NewsController::class, 'index'])->name('news');
  Route::get('/news/{id}/{slug}', [NewsController::class, 'show'])->name('news.single');
  // Page Route
  Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.single');

  // Application Route
  Route::resource('application', ApplicationController::class);

  //Team
  Route::get('/view-team/{id}',[TeamController::class,'team'])->name('web.team');


  // SetCookie Route
  Route::get('/set-cookie', [HomeController::class, 'setCookie'])->name('setCookie');
});

// Set Lang Version
Route::get('locale/language/{locale}', function ($locale) {

  \Session::put('locale', $locale);

  \App::setLocale($locale);

  return redirect()->back();
})->name('version');



//Admin Routes
Route::view('login', 'auth.login');
Route::post('login', [AuthController::class, 'login'])->name('login');
/******************LOGIN PAGE ROUTES END****************/

/*******************REGISTER ROUTE START*************/
Route::view('register', 'auth.register');
Route::post('register', [AuthController::class, 'register'])->name('register');
/*******************REGISTER ROUTE END*************/

/*******************LOGOUT ROUTE START*************/
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
/*******************LOGOUT ROUTE END*************/
Route::post('get_city_against_states', [AuthController::class, 'getCityAgainstStates'])->name('get_city_against_states');
Route::post('get_state_against_countries', [AuthController::class, 'getStateAgainstCountries'])->name('get_state_against_countries');
Route::post('get_course_aganist_college', [AuthController::class, 'getCourseAganistCollege'])->name('get_course_aganist_college');
Route::post('get_semester_aganist_course', [AuthController::class, 'getSemesterAganistCourse'])->name('get_semester_aganist_course');
Route::post('get_subject_aganist_semester', [AuthController::class, 'getSubjectAganistSemester'])->name('get_subject_aganist_semester');
Route::get('get_course_fields', [AuthController::class, 'getCourseFields'])->name('get_course_fields');


/*******************ADMIN ROUTE START*************/
include __DIR__ . '/admin.php';
/*******************ADMIN ROUTE END*************/

/*******************STUDENT ROUTE START*************/
include __DIR__ . '/student.php';
/*******************STUDENT ROUTE END*************/

/*******************COLLEGE ROUTE START*************/
include __DIR__ . '/college.php';
/*******************COLLEGE ROUTE END*************/

/*******************TEACHER ROUTE START*************/
include __DIR__ . '/teacher.php';
/*******************TEACHER ROUTE END*************/

/*******************Prospect ROUTE START*************/
include __DIR__ . '/prospect.php';
/*******************Prospect ROUTE END*************/
/******************FUNCTIONALITY ROUTES****************/
Route::get('cd', function () {
  Artisan::call('config:cache');
  Artisan::call('migrate:refresh');
  Artisan::call('db:seed', ['--class' => DatabaseSeeder::class]);
  Artisan::call('view:clear');
  return 'DONE';
});
Route::get('migrate', function () {
  Artisan::call('config:cache');
  Artisan::call('migrate');
  Artisan::call('view:clear');
  return 'DONE';
});
Route::get('cache_clear', function () {
  Artisan::call('config:cache');
  Artisan::call('cache:clear');
  Artisan::call('view:clear');
  return 'DONE';
});
Route::get('test', function () {
  dd(config('services.razor_pay'));
  // PaymentGateway::proccess();
});
Route::get('add_categories', function () {

  DB::table('document_categories')->insert([
    ['name' => 'Passport Size Photograph'],
    ['name' => 'Full Signatue of the Candidate'],
    ['name' => 'Full Signatue of the Father'],
    ['name' => 'Full Signatue of the Mother'],
    ['name' => 'Full Signatue of the Guradian'],
    ['name' => 'Aadhar Card'],
    ['name' => 'Citizen Certificate'],
    ['name' => 'Caste Certificate From the Appropriate Authority'],
    ['name' => 'Physically Handicapped Ceertificate with Percentage of Disability from the Appropriate'],
    ['name' => 'Ex-Serviceman Certificate'],
    ['name' => '10th or Equivalent Certificate'],
    ['name' => '10th or Equivalent Martsheet'],
  ]);
});





