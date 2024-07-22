<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GovernanceObjectCompany;
use App\Models\GovernancePracticeCompany;
use App\Models\UserCompany;

class GovernanceObjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($companyId, $domainId, $governanceObjectId)
    {
        $user = auth()->user();

        $userCompany = UserCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->with('company')
            ->first();

        if(!$userCompany) {
            return redirect()->back()->withErrors(['message' => 'Company not found.']);
        }

        $governanceObjectCompany = GovernanceObjectCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governanceObjectId', $governanceObjectId)
            ->with('governanceObject')
            ->first();

        if(!$governanceObjectCompany) {
            return redirect()->back()->withErrors(['message' => 'Governance Object not found.']);
        }

        $governancePracticeCompanyList = GovernancePracticeCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governanceObjectCompanyId', $governanceObjectCompany->governanceObjectId)
            ->with('governancePractice')
            ->get();

        return view('governanceObject', compact('userCompany', 'governanceObjectCompany', 'governancePracticeCompanyList'));
    }
}
