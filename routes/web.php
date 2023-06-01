<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EcoFamilyController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\SheetController;
use App\Http\Controllers\TownController;
use App\Http\Controllers\FunWalkController;
use App\Http\Controllers\MilestoneController;


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
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/eco-fam', [EcoFamilyController::class, 'index'])->name('eco-fam');
Route::get('/our-team', [HomeController::class, 'ourteam'])->name('our-team');

// Form Recruitment
// Route::get('/recruitmentForm/JAGAT', [HomeController::class, 'disableJagat']);
// Route::get('/recruitmentForm/{team:subdivisi}-sub', [RecruitmentController::class, 'index'])->name('recruitmentFormSubdivisi');
// Route::get('/recruitmentForm/{team:name}', [RecruitmentController::class, 'index'])->name('recruitmentForm');
// Route::post('/recruitmentForm', [RecruitmentController::class, 'store']); // database
// Route::post('/recruitmentForm', [SheetController::class, 'store']); // sheet

// After OPREC
// Route::get('/oprec-thanks', [HomeController::class, 'oprecthanks'])->name('oprec-thanks');

// ECO Town
Route::group(['prefix' => 'town'], function() {
    Route::get('/', [TownController::class, 'index'])->name('town-landing');
    Route::get('/register');
    Route::get('/info');
});

// ECO Fun Walk
Route::group(['prefix' => 'fun-walk'], function() {
    Route::get('/', [FunWalkController::class, 'index'])->name('fun-walk-landing');
    Route::get('/register');
    Route::get('/info');
});

// Milestone
Route::group(['prefix' => 'milestone'], function() {
    Route::get('/', [MilestoneController::class, 'index'])->name('milestone-landing');
    Route::group(['prefix' => 'bank-sampah'], function() {
        Route::get('/gen-1', [MilestoneController::class, 'firstGenBS'])->name('1st-gen-bank-sampah');
        Route::get('/gen-2', [MilestoneController::class, 'secGenBS'])->name('2nd-gen-bank-sampah');
        Route::get('/gen-3', [MilestoneController::class, 'thirdGenBS'])->name('3rd-gen-bank-sampah');
        Route::get('/gen-4', [MilestoneController::class, 'fourthGenBS'])->name('4th-gen-bank-sampah');
        Route::get('/gen-5', [MilestoneController::class, 'fifthGenBS'])->name('5th-gen-bank-sampah');
    });
    Route::group(['prefix' => 'umn-eco'], function() {
        Route::get('/gen-1', [MilestoneController::class, 'firstGenECO'])->name('1st-gen-umn-eco');
        Route::get('/gen-2', [MilestoneController::class, 'secGenECO'])->name('2st-gen-umn-eco');
        Route::get('/gen-3', [MilestoneController::class, 'thirdGenECO'])->name('3st-gen-umn-eco');
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
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard-admin')->middleware('auth:web');
    Route::get('/town')->middleware('auth:web');
    Route::get('/fun-walk')->middleware('auth:web');

    // Setting Admin
    Route::get('/setting', [AdminController::class, 'setting'])->name('admin-setting')->middleware('auth:web');
    Route::get('/change-status', [AdminController::class, 'changeStatus'])->name('admin-setting-change-status')->middleware('auth:web');
});