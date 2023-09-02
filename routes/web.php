<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EcoFamilyController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\SheetController;
use App\Http\Controllers\WeheaController;
use App\Http\Controllers\MeruBetiriController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\QrHandlerController;
use App\Http\Controllers\UserController;

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

// WEB UTAMA UMN ECO 2023

// Route Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/about-us', [HomeController::class, 'aboutus'])->name('about-us');
Route::get('/eco-fam', [EcoFamilyController::class, 'index'])->name('eco-fam');
Route::get('/our-team', [HomeController::class, 'ourteam'])->name('our-team');

// Login & Register user
Route::get('/register', [UserController::class, 'registerPage'])->name('registerUser')->middleware('guest:participant');
Route::post('/register', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'loginPage'])->name('loginUser')->middleware('guest:participant');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logoutUser')->middleware('auth:participant');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboardUser')->middleware('auth:participant');

// Form Recruitment
// Route::get('/recruitmentForm/JAGAT', [HomeController::class, 'disableJagat']);
// Route::get('/recruitmentForm/{team:subdivisi}-sub', [RecruitmentController::class, 'index'])->name('recruitmentFormSubdivisi');
// Route::get('/recruitmentForm/{team:name}', [RecruitmentController::class, 'index'])->name('recruitmentForm');
// Route::post('/recruitmentForm', [RecruitmentController::class, 'store']); // database
// Route::post('/recruitmentForm', [SheetController::class, 'store']); // sheet

// After OPREC
// Route::get('/oprec-thanks', [HomeController::class, 'oprecthanks'])->name('oprec-thanks');

// ECO Town
Route::group(['prefix' => 'wehea'], function() {
    Route::get('/', [WeheaController::class, 'index'])->name('wehea-landing');
    Route::post('/register');
    Route::get('/info');
});

// ECO Fun Walk
Route::group(['prefix' => 'meru-betiri'], function() {
    Route::get('/', [MeruBetiriController::class, 'index'])->name('meru-betiri-landing');
    Route::get('/register');
    Route::get('/info');
});

// Milestone
Route::group(['prefix' => 'milestone'], function() {
    Route::get('/', [MilestoneController::class, 'index'])->name('milestone');
    Route::group(['prefix' => 'bank-sampah'], function() {
        Route::get('/gen-1', [MilestoneController::class, 'firstGenBS'])->name('1st-gen-bank-sampah');
        Route::get('/gen-2', [MilestoneController::class, 'secGenBS'])->name('2nd-gen-bank-sampah');
        Route::get('/gen-3', [MilestoneController::class, 'thirdGenBS'])->name('3rd-gen-bank-sampah');
        Route::get('/gen-4', [MilestoneController::class, 'fourthGenBS'])->name('4th-gen-bank-sampah');
        Route::get('/gen-5', [MilestoneController::class, 'fifthGenBS'])->name('5th-gen-bank-sampah');
    });
    Route::group(['prefix' => 'umn-eco'], function() {
        Route::get('/gen-1', [MilestoneController::class, 'firstGenECO'])->name('1st-gen-umn-eco');
        Route::get('/gen-2', [MilestoneController::class, 'secGenECO'])->name('2nd-gen-umn-eco');
        Route::get('/gen-3', [MilestoneController::class, 'thirdGenECO'])->name('3rd-gen-umn-eco');
    });
});

//-------------------------------------------------------------------------------------------------------------------------


// WEB ADMIN UMN ECO 2023

// Login untuk Admin
Route::get('/loginAdmin', [AdminController::class, 'index'])->name('loginAdmin')->middleware('guest:web');
Route::post('/loginAdmin', [AdminController::class, 'login']);
Route::post('/logoutAdmin', [AdminController::class, 'logout']);

// Register untuk Admin
Route::get('/registerAdmin', [AdminController::class, 'register'])->name('registerAdmin')->middleware('guest:web');
Route::post('/registerAdmin', [AdminController::class, 'store']);

// Halaman utama admin
Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboardArcade', [AdminController::class, 'dashboardArcade'])->name('dashboard-admin-arcade')->middleware('auth:web');
    Route::get('/dashboardDapatKupon', [AdminController::class, 'dashboardDapatKupon'])->name('dashboard-admin-kupon')->middleware('auth:web');
    Route::get('/wehea')->middleware('auth:web');
    Route::get('/fun-walk')->middleware('auth:web');
    Route::get('/verificationPoint/{boothNum}', [AdminController::class, 'verificationPoint'])->middleware('auth:web');
    Route::get('/verificationKupon/{boothNum}', [AdminController::class, 'verificationKupon'])->middleware('auth:web');
    // Route::post('/addPoints/{userId}/{point}', [AdminController::class, 'increaseCreditPoints'])->name('add.points')->middleware('auth:web');
    Route::post('/addPoints', [AdminController::class, 'increasePoints'])->name('addPoints')->middleware('auth:web');
    Route::post('/addKupons', [AdminController::class, 'increaseKupons'])->name('addKupons')->middleware('auth:web');

    // Setting Admin
    Route::get('/setting', [AdminController::class, 'setting'])->name('admin-setting')->middleware('auth:web');
    Route::get('/change-status', [AdminController::class, 'changeStatus'])->name('admin-setting-change-status')->middleware('auth:web');
});


// QR
Route::get('/scannerPageMain', [QrHandlerController::class, 'main'])->name('scannerPageMain')->middleware('auth:participant');
Route::get('/scannerPageDapatKupon', [QrHandlerController::class, 'dapatKupon'])->name('scannerPageDapatKupon')->middleware('auth:participant');
Route::post('/verificationAdmin/sendReqMain', [QrHandlerController::class, 'sendReqMain']);
Route::post('/verificationAdmin/sendReqDapatKupon', [QrHandlerController::class, 'sendReqDapatKupon']);
Route::post('/sendDataMainToAdmin', [AdminController::class, 'sendToAdminPageMain']);
Route::post('/sendDataDapatKuponToAdmin', [AdminController::class, 'sendToAdminPageDapatKupon']);
Route::post('/respond', [AdminController::class, 'respond']);