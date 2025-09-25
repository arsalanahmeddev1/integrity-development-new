<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// web routes


// user routes 



// admin routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/companies', fn() => view('screens.admin.companies.index'))->name('admin.companies.index');
    Route::get('/billing', fn() => view('screens.admin.billing.index'))->name('admin.billing.index');
    Route::get('/projects', fn() => view('screens.admin.projects.index'))->name('admin.projects.index');
});

// company admin routes
// Route::prefix('companyadmin')->middleware(['auth', 'role:company_admin'])->group(function () {
//     Route::get('/dashboard', fn() => view('screens.dashboards.companyadmin'))->name('companyadmin.dashboard');
// });

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
