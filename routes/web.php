<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:super-admin'])->group(function () {
    Route::get('/super-admin/dashboard', [SuperAdminController::class, 'index'])->name('super.dashboard');
});


// web routes


// user routes 



// super admin routes
Route::prefix('superadmin')->middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/dashboard', fn() =>  view('screens.dashboards.superadmin'))->name('superadmin.dashboard');
    Route::get('/companies', fn() => view('screens.superadmin.companies.index'))->name('superadmin.companies.index');
    Route::get('/billing', fn() => view('screens.superadmin.billing.index'))->name('superadmin.billing.index');
    Route::get('/projects', fn() => view('screens.projects.index'))->name('superadmin.projects.index');
});

// company admin routes
Route::prefix('companyadmin')->middleware(['auth', 'role:company_admin'])->group(function () {
    Route::get('/dashboard', fn() => view('screens.dashboards.companyadmin'))->name('companyadmin.dashboard');
    Route::get('/projects', fn() => view('screens.projects.index'))->name('companyadmin.projects.index');
});

// common routes
Route::middleware(['auth', 'role_or_permission:super_admin|company_admin'])->group(function() {
    Route::get('/projects', fn() => view('screens.projects.index'))->name('projects.index');
});

// auth routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
