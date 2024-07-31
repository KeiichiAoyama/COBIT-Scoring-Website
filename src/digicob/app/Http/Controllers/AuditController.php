<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Activities;
use App\Models\ActivitiesCompany;
use App\Models\DomainCompany;
use App\Models\GovernanceObjectCompany;
use App\Models\GovernancePracticeCompany;
use App\Models\UserCompany;
use Illuminate\Http\Request;

class AuditController extends Controller
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
            ->first();

        if(!$governancePracticeCompany) {
            return redirect()->back()->withErrors(['message' => 'Governance Practice not found.']);
        }

        $activitiesCompany = ActivitiesCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeCompanyId', $governancePracticeCompany->governancePracticeCompanyId)
            ->with('activities')
            ->first();

        return view('audit', compact('userCompany', 'governancePracticeCompany','domainId','activitiesCompany'));
    }

    public function question($companyId, $domainId, $governanceObjectId, $governancePracticeId, $activitiesId)
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
            ->first();

        if(!$governancePracticeCompany) {
            return redirect()->back()->withErrors(['message' => 'Governance Practice not found.']);
        }

        $activitiesCompany = ActivitiesCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('activitiesId', $activitiesId)
            ->with('activities')
            ->first();

        if(!$activitiesCompany) {
            return redirect()->back()->withErrors(['message' => 'Activity not found.']);
        }

        return view('questions', compact('userCompany', 'governancePracticeCompany', 'activitiesCompany'));
    }

    public function saveAuditNext(Request $request)
    {
        $validated = $request->validate([
            'activitiesCompanyId' => 'required|string|max:255',
            'activitiesCompanyScore' => 'required|integer',
            'activitiesCompanyFindings' => 'nullable|string',
            'activitiesCompanyImpact' => 'nullable|string',
            'activitiesCompanyRecommendations' => 'nullable|string',
            'activitiesCompanyResponse' => 'nullable|string',
            'activitiesCompanyStatus' => 'nullable|string|max:255',
            'activitiesCompanyDeadline' => 'nullable|date',
            'activitiesCompanyPersonInCharge' => 'nullable|string|max:255',
        ]);

        $activities = ActivitiesCompany::where('activitiesCompanyId', $validated['activitiesCompanyId'])->first();

        if(!$activities){
            return redirect()->back()->withErrors(['message' => 'Activity not found.']);
        }

        $activities->activitiesCompanyScore = $validated['activitiesCompanyScore'];
        $activities->activitiesCompanyFindings = $validated['activitiesCompanyFindings'];
        $activities->activitiesCompanyImpact = $validated['activitiesCompanyImpact'];
        $activities->activitiesCompanyRecommendations = $validated['activitiesCompanyRecommendations'];
        $activities->activitiesCompanyResponse = $validated['activitiesCompanyResponse'];
        $activities->activitiesCompanyStatus = $validated['activitiesCompanyStatus'];
        $activities->activitiesCompanyDeadline = $validated['activitiesCompanyDeadline'];
        $activities->activitiesCompanyPersonInCharge = $validated['activitiesCompanyPersonInCharge'];
        $activities->save();

        return response()->json(['message' => 'Answer saved.'], 200);
    }

    public function result($companyId, $domainId, $governanceObjectId, $governancePracticeId)
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

        $governanceObjectCompany = GovernanceObjectCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governanceObjectId', $governanceObjectId)
            ->with('governanceObject')
            ->first();

        if(!$governanceObjectCompany) {
            return redirect()->back()->withErrors(['message' => 'Governance Object not found.']);
        }

        $governancePracticeCompany = GovernancePracticeCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeId', $governancePracticeId)
            ->with('governancePractice')
            ->first();

        if(!$governancePracticeCompany) {
            return redirect()->back()->withErrors(['message' => 'Governance Practice not found.']);
        }

        $averageActivityScore = ActivitiesCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeCompanyId', $governancePracticeCompany->governancePracticeCompanyId)
            ->with('activities')
            ->avg('activities_company_score');

        Controller::updateAverage($userCompany, $domainCompany, $governanceObjectCompany, $governancePracticeCompany, $averageActivityScore);

        return view('audit.result', compact('userCompany', 'domainCompany', 'governanceObjectCompany', 'governancePracticeCompany', 'averageActivityScore'));
    }
}
