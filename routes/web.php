<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DownpourAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\Team2021Controller;
use App\Http\Controllers\DroughtRegistrationController;
use App\Http\Controllers\DroughtController;
use App\Http\Controllers\DownpourController;
use App\Http\Controllers\DownpourRegistrationController;
use App\Http\Controllers\LoginDownpourController;
use App\Http\Controllers\DroughtBingoController;
use App\Http\Controllers\BingoSubmissionRequestController;
use App\Http\Controllers\DownpourHomeController;
use App\Http\Controllers\SheetController;

/*{{  }}
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//WEB UTAMA ECO 2022
//Route Halaman Utama
// Route::get('/', [DroughtController::class, 'index'])->name('homeDrought');
Route::get('/', [HomeController::class, 'index'])->name('about-us');
// Route::get('/landing', [HomeController::class, 'landing'])->name('landing');
Route::get('/eco-fam', [Team2021Controller::class, 'index'])->name('eco-fam');
Route::get('/our-team', [HomeController::class, 'ourteam'])->name('our-team');

//After OPREC
Route::get('/oprec-thanks', [HomeController::class, 'oprecthanks'])->name('oprec-thanks');

//Form Recruitment
Route::get('/recruitmentForm/JAGAT', [HomeController::class, 'disableJagat']);
Route::get('/recruitmentForm/{team:subdivisi}-sub', [RecruitmentController::class, 'index'])->name('recruitmentFormSubdivisi');
Route::get('/recruitmentForm/{team:name}', [RecruitmentController::class, 'index'])->name('recruitmentForm');
// Route::post('/recruitmentForm', [RecruitmentController::class, 'store']);
Route::post('/recruitmentForm', [SheetController::class, 'store']);


//drought
// Route::group(['prefix' => 'drought'], function () {

//     Route::get('/info', [HomeController::class, 'info'])->name('info');

//     Route::get('/', [DroughtController::class, 'index'])->name('homeDrought');
//     Route::get('/regulation', [DroughtRegistrationController::class, 'regulation'])->name('regulation');


//     Route::get('/registration', [DroughtRegistrationController::class, 'registration'])->name('regisDrought');
//     Route::post('/registration', [DroughtRegistrationController::class, 'registrationValidation'])->name('regisDrought');

//     //Login Drought

//     Route::get('/login', [DroughtController::class, 'login'])->name('loginDrought')->middleware('guest:drought');
//     Route::post('/login/verification', [DroughtController::class, 'loginVerification'])->name('loginVerification')->middleware('guest:drought');
//     Route::get('/logout', [DroughtController::class, 'logout'])->name('logoutDrought')->middleware('auth:drought');

//     //Drought Bingo
//     Route::get('/bingo', [DroughtBingoController::class, 'bingo'])->name('bingoDrought')->middleware('auth:drought');
//     Route::post('/submitBingo', [DroughtBingoController::class, 'submitBingoVerification'])->name('bingoSubmitVerification')->middleware('auth:drought');

// });

//Downpour Registration
// Route::group(['prefix' => 'downpour'], function () {
//     Route::get('/', [HomeController::class, 'index'])->name('home');
//     Route::get('/description', [DownpourHomeController::class, 'description'])->name('descDownpour');
// 	Route::get('/pendaftaran', [DownpourHomeController::class, 'teste'])->name('pendaftaranDownpour')->middleware('auth:downpour');
    
// 	//Registration Downpour
//     Route::get('/registration', [LoginDownpourController::class, 'registrationDownpour'])->name('downpourRegistration')->middleware('guest:downpour');
//     Route::post('/registration', [LoginDownpourController::class, 'registrationValidation'])->name('regisDownpour');

//     //Login Downpour
//     Route::get('/login', [LoginDownpourController::class, 'loginDownpour'])->name('loginDownpour')->middleware('guest:downpour');
//     Route::post('/login', [DownpourController::class, 'loginVerification'])->name('loginVerification');
//     Route::get('/logout', [DownpourController::class, 'logout'])->name('logoutDownpour')->middleware('auth:downpour');

//     //Forget Password Downpour
//     Route::get('/forgetPassword', [LoginDownpourController::class, 'forgetVerifyPageDownpour'])->name('forgetVerifyPageDownpour')->middleware('guest:downpour');
//     Route::get('/newPassword', [LoginDownpourController::class, 'newPassDownpour'])->name('newPassDownpour')->middleware('guest:downpour');
//     Route::post('/forgetPassword', [LoginDownpourController::class, 'forgetPassword'])->name('email.forgetPassword');
//     Route::post('/newPassword', [LoginDownpourController::class, 'newPass'])->name('email.newPass');

//     //Post Login
//     Route::get('/ticket', [DownpourController::class, 'ticketDownpour'])->name('ticketDownpour')->middleware('auth:downpour');
//     Route::post('/ticket', [DownpourController::class, 'activityVerification'])->name('activitySubmitVerification');
//     //Route::get('/pendaftaran', [DownpourController::class, 'pendaftaranDownpour'])->name('pendaftaranDownpour')->middleware('auth:downpour');
//     Route::post('/pendaftaranSeminar', [DownpourController::class, 'daftarSeminarDownpour'])->name('daftarSeminarDownpour');
//     Route::post('/pendaftaranActivity', [DownpourController::class, 'daftarActivityDownpour'])->name('daftarActivityDownpour');
//     Route::post('/registration',[DownpourRegistrationController::class, 'registrationValidation'])->name('downpourRegistration');
//     Route::get('/download-regulation', [DownpourController::class, 'getDownload'])->name('downloadRegulation');
// });

//WEB ADMIN
//Login untuk Admin
Route::get('/loginAdmin', [AdminController::class, 'index'])->name('loginAdmin')->middleware('guest:web');
Route::post('/loginAdmin', [AdminController::class, 'login']);
Route::post('/logoutAdmin', [AdminController::class, 'logout']);

//Register untuk Admin
Route::get('/registerAdmin', [AdminController::class, 'register'])->name('registerAdmin')->middleware('guest:web');
Route::post('/registerAdmin', [AdminController::class, 'store']);

//Halaman utama admin


// Route::get('/dashboardOprec', [AdminController::class, 'dashboardOprec'])->middleware('auth:web')->name('dashboardOprec');
// Route::get('/dashboardDrought', [AdminController::class, 'dashboardDrought'])->middleware('auth:web')->name('dashboardDrought');
// Route::get('/dashboardDownpour', [AdminController::class, 'dashboardDownpour'])->middleware('auth:web')->name('dashboardDownpour');
// Route::get('/dashboardFeatures', [AdminController::class, 'dashboardFeatures'])->middleware('auth:web')->name('dashboardFeatures');

// Route::post('/delete/{recruitment:id}', [AdminController::class, 'delete'])->middleware('auth:web');
// Route::get('/export/{recruitment:Team}', [AdminController::class, 'export'])->name('export')->middleware('auth:web');
// Route::get('/export', [AdminController::class, 'exportAll'])->name('export')->middleware('auth:web');
// Route::get('/exportDrought', [AdminController::class, 'exportDrought'])->name('exportDrought')->middleware('auth:web');
// Route::get('/exportDownpour', [AdminController::class, 'exportDownpour'])->name('exportDownpour')->middleware('auth:web');
// Route::get('/exportDownpourAll', [AdminController::class, 'exportDownpourAll'])->name('exportDownpourAll')->middleware('auth:web');

//Recruitment Setting Admin
// Route::get('/recruitmentSetting', [AdminController::class, 'setting'])->middleware('auth:web');
// Route::get('/changeStatus', [AdminController::class, 'changeStatus'])->middleware('auth:web');
// Route::get('/changeActivity1Status', [AdminController::class, 'changeActivity1Status'])->middleware('auth:web');
// Route::get('/changeActivity2Status', [AdminController::class, 'changeActivity2Status'])->middleware('auth:web');
// Route::get('/changeActivity3Status', [AdminController::class, 'changeActivity3Status'])->middleware('auth:web');
// Route::get('/changeActivity4Status', [AdminController::class, 'changeActivity4Status'])->middleware('auth:web');
// Route::get('/changeSeminarStatus', [AdminController::class, 'changeSeminarStatus'])->middleware('auth:web');
// Route::get('/changeBingoStatus', [AdminController::class, 'changeBingoStatus'])->middleware('auth:web');
// Route::get('/changeStatusFeatures', [AdminController::class, 'changeStatusFeatures'])->middleware('auth:web');


// Route::get('/changeBingoStatus', [AdminController::class, 'changeBingoStatus']);
// Route::get('/changeStatusFeatures', [AdminController::class, 'changeStatusFeatures']);

//STAGE DOWNPOUR
//LANDING
// Route::get('/downpour', [DownpourHomeController::class, 'index'])->name('landingDownpour');


// Route::get("/admin/student/ticket", [DownpourAdminController::class, "downpourStudentTickets"])->name("student.ticket");
// Route::post("/admin/student/activity-booth/toggle", [DownpourAdminController::class, "toggleActivityBooth"])->name("student.activity.booth.toggle");
// Route::post("/admin/student/seminar/toggle", [DownpourAdminController::class, "toggleSeminar"])->name("student.seminar.toggle");

