<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\UserCompany;
use App\Models\DomainCompany;
use App\Http\Controllers\Controller;
use App\Models\GovernanceObjectCompany;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($companyId)
    {
        $user = auth()->user();

        $userCompany = UserCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->with('company')
            ->first();

        if(!$userCompany) {
            return redirect()->back()->withErrors(['message' => 'Company not found.']);
        }

        $domainCompanyList = DomainCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->with('domain')
            ->get();

        $governanceObjectCompanyList = GovernanceObjectCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->with('governanceObject')
            ->get();

        return view('company', compact('userCompany', 'domainCompanyList', 'governanceObjectCompanyList'));
    }
}
