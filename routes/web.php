<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\MentorAuth;
use App\Http\Controllers\MentorAuthController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\PlacementApplyContoller;
use App\Http\Controllers\PracticalTrainings;
use App\Http\Controllers\PracticalTrainingsDetails;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('try', function () {
    \Artisen::call("cache:clear");
});

Auth::routes([
    'verify' => true,
]);

Route::group(['prefix' => 'super-admin'], function () {
    Route::get('/', [App\Http\Controllers\SuperAdminController::class, 'index']);
});

Route::resource('groups', GroupController::class);
Route::resource('conversations', ConversationController::class);
Route::resource('/vacancie-apply', App\Http\Controllers\VacancieApplyController::class)->name('vacancieapply', "*");
Route::post('/placement-apply', [PlacementApplyContoller::class, 'store'])->name('placementapply', "*");
Route::get('/job_applicants', [PlacementApplyContoller::class, 'applicants'])->name('applicants', "*");

Route::group(['prefix' => 'admin'], function () {
    Route::get('/chat', [App\Http\Controllers\HomeController::class, 'chat']);
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('users');
    Route::post('/adduser', [App\Http\Controllers\AdminController::class, 'adduser'])->name('adduser');
    Route::get('/uploadCourse', [App\Http\Controllers\AdminController::class, 'uploadCourse'])->name('uploadCourse');
    Route::get('/useredit/{id}', [App\Http\Controllers\AdminController::class, 'useredit'])->name('useredit');
    Route::post('/userupdate', [App\Http\Controllers\AdminController::class, 'userupdate'])->name('userupdate');
    Route::get('/userdelete/{id}', [App\Http\Controllers\AdminController::class, 'userdelete'])->name('userdelete');
    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
    Route::post('/addcategory', [App\Http\Controllers\CategoryController::class, 'addCategory'])->name('addcategory');
    Route::get('/editcategory/{id}', [App\Http\Controllers\CategoryController::class, 'editCategory'])->name('editcategory');
    Route::post('/updatecategory', [App\Http\Controllers\CategoryController::class, 'updateCategory'])->name('updatecategory');
    Route::get('/catdelete/{id}', [App\Http\Controllers\CategoryController::class, 'catDelete'])->name('catdelete');
    Route::get('/subcategory', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('subcategory');
    Route::post('/addsubcategory', [App\Http\Controllers\SubCategoryController::class, 'addSubCategory'])->name('addsubcategory');
    Route::get('/editsubcategory/{id}', [App\Http\Controllers\SubCategoryController::class, 'editSubCategory'])->name('editsubcategory');
    Route::post('/updatesubcategory', [App\Http\Controllers\SubCategoryController::class, 'updateSubCategory'])->name('updatesubcategory');
    Route::get('/subcatdelete/{id}', [App\Http\Controllers\SubCategoryController::class, 'subCatDelete'])->name('subcatdelete');
    Route::resource('product', App\Http\Controllers\ProductController::class);
    Route::get('/getsubcategory', [App\Http\Controllers\ProductController::class, 'getsubcategory'])->name('getsubcategory');
    Route::resource('order', App\Http\Controllers\OrderController::class);
});



// MentorController
// Route::get('/mentor_application', [MentorController::class, 'create'])->name('mentorApplication');
// Route::get('/mentorship_for_students', [MentorController::class, 'index'])->name('forStudents');
// Route::get('/mentorship_for_professionals', [MentorController::class, 'Professionals'])->name('forProfessionals');

Route::get('mentor_auth', [MentorAuthController::class, 'index'])->name('joinMentor');
Route::post('mentor_registeration', [MentorAuthController::class, 'store'])->name('mentorRegisteration');
Route::get('mentor_login', [MentorAuthController::class, 'login']);
Route::post('mentor_login', [MentorAuthController::class, 'loginRequest'])->name('mentorLogin');
Route::post('mentor_login', [MentorAuthController::class, 'loginRequest'])->name('mentorLogin');
Route::get('practicalTrainings', [PracticalTrainings::class, 'index'])->name('practicalTrainings');
Route::get('practicalTrainingsDetails', [PracticalTrainingsDetails::class, 'index'])->name('practicalTrainingsDetails');
// Route::get('appointment_booking', [AppointmentController::class, 'bookAppointment]']);

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', function () {
        return view('mentor.profile');
    });
    Route::get('/mentor_application', [MentorController::class, 'create'])->name('mentorApplication');
    Route::Post('/applyMentor', [MentorController::class, 'store'])->name('applyMentor');
    Route::get('/appointment_booking/{mentorId}', [AppointmentController::class, 'show']);
    Route::post('/appointment_booking/{mentorId}', [AppointmentController::class, 'store'])->name('bookAppointment');
});
Route::get('/mentorship_for_students', [MentorController::class, 'index'])->name('forStudents');
Route::get('/mentorship_for_professionals', [MentorController::class, 'Professionals'])->name('forProfessionals');
Route::resource('/placement', App\Http\Controllers\PlacementController::class)->name('placement', "*");
Route::resource('/vacancie', App\Http\Controllers\VacanciesController::class)->name('vacancie', "*");
Route::get('/forgot', function () {
    return view('auth.forgot');
});