<?php

// Vendor Routs
use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

Route::prefix('vendor')->middleware(['auth', 'role:vendor'])->group(function () {
    Route::get('dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
});
