<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\app\Http\Controllers\AdminDashboardController;

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('admin', AdminController::class)->names('admin');
// });

Route::middleware([])
    ->prefix('admin') // Adds
    ->name('admin.')
    ->group(function () {
        Route::resource('dashboard', AdminDashboardController::class)->names([
            'index' => 'dashboard.index', // admin.dashboard.index
            'create' => 'dashboard.create', // admin.dashboard.create
            'store' => 'dashboard.store', // admin.dashboard.store
            'show' => 'dashboard.show', // admin.dashboard.show
            'edit' => 'dashboard.edit', // admin.dashboard.edit
            'update' => 'dashboard.update', // admin.dashboard.update
            'destroy' => 'dashboard.destroy', // admin.dashboard.destroy
        ]);
    });
