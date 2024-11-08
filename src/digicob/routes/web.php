<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GovernanceObjectController;
use App\Http\Controllers\GovernancePracticeController;
use App\Http\Controllers\PDFController;

Route::redirect('/', '/pdf')->name('dashboard');

Route::get('/home', function () {
    return view('new-company');
});

Auth::routes(array(['register' => false, 'login' => false]));

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/pdf', [PDFController::class, 'generatePDF'])->name('pdf');

    Route::get('/dashboard/newCompany', [DashboardController::class, 'newCompany'])->name('newCompany');

    Route::post('/dashboard/newCompany/save', [DashboardController::class, 'addNewCompany'])->name('addNewCompany');

    Route::get('/{company_id}', [CompanyController::class, 'index'])->name('company_home');

    Route::get('/{company_id}/{domain_id}', [DomainController::class, 'index'])->name('domain_home');

    Route::get('/{company_id}/{domain_id}/{gov_obj_id}', [GovernanceObjectController::class, 'index'])->name('governance_object_home');

    Route::get('/{company_id}/{domain_id}/{gov_obj_id}/{gov_prac_id}', [GovernancePracticeController::class, 'index'])->name('governance_practice_home');

    Route::get('/{company_id}/{domain_id}/{gov_obj_id}/{gov_prac_id}/audit', [AuditController::class, 'index'])->name('audit_home');

    Route::get('/{company_id}/{domain_id}/{gov_obj_id}/{gov_prac_id}/audit/question', [AuditController::class, 'question'])->name('audit_question');

    Route::get('/{company_id}/{domain_id}/{gov_obj_id}/{gov_prac_id}/result', [AuditController::class, 'result'])->name('audit_result');
});

require __DIR__ . '/auth.php';

require __DIR__ . '/api.php';
