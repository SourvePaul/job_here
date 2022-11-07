<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\JobController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[BlogController::class,'index'])->name('/');
Route::get('/job-board',[BlogController::class,'jobBoard'])->name('job-board');
Route::get('/single-job',[BlogController::class,'singleJob'])->name('single-job');
Route::get('/job-details/{id}',[BlogController::class,'jobDetails'])->name('job-details');
Route::get('/about',[BlogController::class,'about'])->name('about');
Route::get('/contact',[BlogController::class,'contact'])->name('contact');
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('/blog-details',[BlogController::class,'blogDetails'])->name('blog-details');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

    /* Slider Routes */
    Route::get('/add-slider',[HomeController::class,'addSlider'])->name('add-slider');
    Route::get('/manage-slider',[HomeController::class,'manageSlider'])->name('manage-slider');
    Route::post('/new-slider',[HomeController::class,'newSlider'])->name('new-slider');
    Route::get('/edit-slider/{id}',[HomeController::class,'editSlider'])->name('edit-slider');
    Route::post('/update-slider',[HomeController::class,'updateSlider'])->name('update-slider');
    Route::post('/delete-slider',[HomeController::class,'deleteSlider'])->name('delete-slider');

    /* Job Category Routes */
    Route::get('/add-job-category',[JobCategoryController::class,'addJobCategory'])->name('add-job-category');
    Route::get('/manage-job-category',[JobCategoryController::class,'manageJobCategory'])->name('manage-job-category');
    Route::get('/status/{id}',[JobCategoryController::class,'statusJobCategory'])->name('status');
    Route::post('/new-job-category',[JobCategoryController::class,'newJobCategory'])->name('new-job-category');
    Route::get('/edit-job-category/{id}',[JobCategoryController::class,'editJobCategory'])->name('edit-job-category');
    Route::post('/update-job-category',[JobCategoryController::class,'updateJobCategory'])->name('update-job-category');
    Route::post('/delete-job-category',[JobCategoryController::class,'deleteJobCategory'])->name('delete-job-category');

    /* Company Routes */
    Route::get('/add-company',[CompanyInfoController::class,'index'])->name('add-company');
    Route::get('/manage-company',[CompanyInfoController::class,'manageCompany'])->name('manage-company');
    Route::post('/new-company',[CompanyInfoController::class,'addCompany'])->name('new-company');
    Route::get('/cStatus/{id}',[CompanyInfoController::class,'statusCompany'])->name('cStatus');
    Route::get('/edit-company/{id}',[CompanyInfoController::class,'editCompany'])->name('edit-company');
    Route::post('/update-company',[CompanyInfoController::class,'updateCompany'])->name('update-company');
    Route::post('/delete-company',[CompanyInfoController::class,'deleteCompany'])->name('delete-company');


    Route::get('/add-job',[JobController::class,'index'])->name('add-job');
    Route::get('/manage-job',[JobController::class,'manageJob'])->name('manage-job');
    Route::post('/new-job',[JobController::class,'saveJob'])->name('new-job');
    Route::get('/edit-job/{id}',[JobController::class,'editJob'])->name('edit-job');
    Route::post('/update-job',[JobController::class,'updateJob'])->name('update-job');
    Route::post('/delete-job',[JobController::class,'deleteJob'])->name('delete-job');
});
