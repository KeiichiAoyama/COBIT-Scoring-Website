<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DomainCompany;
use App\Models\GovernanceObjectCompany;
use App\Models\GovernancePracticeCompany;
use App\Models\UserCompany;

class DomainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($companyId, $domainId)
    {
        $user = auth()->user();

        $userCompany = UserCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->with('company')
            ->first();

        if(!$userCompany) {
            return redirect()->back()->withErrors(['message' => 'Company not found.']);
        }

        $domainCompany = DomainCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('domainId', $domainId)
            ->with('domain')
            ->first();

        if(!$domainCompany) {
            return redirect()->back()->withErrors(['message' => 'Domain not found.']);
        }

        $governanceObjectCompanyList = GovernanceObjectCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('domainCompanyId', $domainCompany->domainCompanyId)
            ->with('governanceObject')
            ->get();

        $governanceObjectCompanyIds = $governanceObjectCompanyList->pluck('governanceObjectCompanyId');

        $governancePracticeCompanyList = GovernancePracticeCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->whereIn('governanceObjectCompanyId', $governanceObjectCompanyIds)
            ->with('governancePractice')
            ->get();

        return view('domain', compact('userCompany', 'domainCompany', 'governanceObjectCompanyList', 'governancePracticeCompanyList'));
    }
}
