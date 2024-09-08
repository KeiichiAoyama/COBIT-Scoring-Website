<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActivitiesCompany;
use App\Models\GovernancePracticeCompany;
use App\Models\UserCompany;

class GovernancePracticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($companyId, $domainId, $governanceObjectId, $governancePracticeId)
    {
        $user = auth()->user();

        $userCompany = UserCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->with('company')
            ->first();

        if(!$userCompany) {
            return redirect()->back()->withErrors(['message' => 'Company not found.']);
        }

        $governancePracticeCompany = GovernancePracticeCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeId', $governancePracticeId)
            ->with('governancePractice')
            ->with(['governancePractice', 'governanceObjectCompany.domainCompany'])
            ->first();

        if(!$governancePracticeCompany) {
            return redirect()->back()->withErrors(['message' => 'Governance Practice not found.']);
        }



        $activitiesCompanyList = ActivitiesCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeCompanyId', $governancePracticeCompany->governancePracticeCompanyId)
            ->with('activities')
            ->get();

        return view('governancePractice', compact('userCompany', 'governancePracticeCompany', 'domainId', 'activitiesCompanyList'));
    }
}
