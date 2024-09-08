<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuditController;

Route::post('/add-company', [DashboardController::class, 'addNewCompany']);

Route::post('/save-audit-next', [AuditController::class, 'saveAuditNext']);

Route::post('/update-extra', [AuditController::class, 'updateExtra'])->name('updateExtra');
