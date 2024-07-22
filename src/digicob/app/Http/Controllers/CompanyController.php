<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\UserCompany;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($companyId)
    {
        $user = auth()->user();

        $company = Company::find($companyId);

        $userCompany = UserCompany::where('companyId', $companyId)
            ->where('userId', $user->userId)
            ->first();


    }
}
