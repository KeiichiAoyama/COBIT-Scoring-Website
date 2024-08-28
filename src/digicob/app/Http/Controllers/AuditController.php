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
use Illuminate\Support\Facades\Log;

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

        if (!$userCompany) {
            return redirect()->back()->withErrors(['message' => 'Company not found.']);
        }

        $governancePracticeCompany = GovernancePracticeCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeId', $governancePracticeId)
            ->with('governancePractice')
            ->first();

        if (!$governancePracticeCompany) {
            return redirect()->back()->withErrors(['message' => 'Governance Practice not found.']);
        }

        $activitiesCompany = ActivitiesCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeCompanyId', $governancePracticeCompany->governancePracticeCompanyId)
            ->with('activities')
            ->first();

        return view('audit', compact('userCompany', 'governancePracticeCompany', 'domainId', 'activitiesCompany'));
    }

    public function question($companyId, $domainId, $governanceObjectId, $governancePracticeId)
    {
        $user = auth()->user();

        $userCompany = UserCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->with('company')
            ->first();

        if (!$userCompany) {
            return redirect()->back()->withErrors(['message' => 'Company not found.']);
        }

        $governancePracticeCompany = GovernancePracticeCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeId', $governancePracticeId)
            ->with('governancePractice')
            ->first();

        if (!$governancePracticeCompany) {
            return redirect()->back()->withErrors(['message' => 'Governance Practice not found.']);
        }

        $activitiesCompany = ActivitiesCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeCompanyId', $governancePracticeCompany->governancePracticeCompanyId)
            ->with('activities')
            ->orderBy('activitiesCompanyId', 'asc')
            ->first();

        if (!$activitiesCompany) {
            return redirect()->back()->withErrors(['message' => 'No activities found.']);
        }

        return view('questions', [
            'userCompany' => $userCompany,
            'governancePracticeCompany' => $governancePracticeCompany,
            'activitiesCompany' => $activitiesCompany,
        ]);
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

        $activitiesCompany = ActivitiesCompany::where('activitiesCompanyId', $validated['activitiesCompanyId'])->first();

        if (!$activitiesCompany) {
            return redirect()->back()->withErrors(['message' => 'Activity not found.']);
        }

        $activitiesCompany->update($validated);

        $nextActivitiesCompany = ActivitiesCompany::where('userId', $activitiesCompany->userId)
            ->where('companyId', $activitiesCompany->companyId)
            ->where('governancePracticeCompanyId', $activitiesCompany->governancePracticeCompanyId)
            ->where('activitiesCompanyId', '>', $activitiesCompany->activitiesCompanyId)
            ->with('activities')
            ->orderBy('activitiesCompanyId', 'asc')
            ->first();

        if ($nextActivitiesCompany) {
            $user = auth()->user();
            $companyId = $nextActivitiesCompany->companyId;
            $domainId = $request->input('domainId');
            $governanceObjectId = $request->input('governanceObjectId');
            $governancePracticeId = $activitiesCompany->governancePracticeCompanyId;

            $userCompany = UserCompany::where('userId', $user->userId)
                ->where('companyId', $companyId)
                ->with('company')
                ->first();

            $governancePracticeCompany = GovernancePracticeCompany::where('userId', $user->userId)
                ->where('companyId', $companyId)
                ->where('governancePracticeCompanyId', $governancePracticeId)
                ->with('governancePractice')
                ->first();

            return response()->json([
                'userCompany' => $userCompany,
                'governancePracticeCompany' => $governancePracticeCompany,
                'activitiesCompany' => $nextActivitiesCompany,
                'message' => 'next',
            ]);
        } else {
            $governancePracticeId = GovernancePracticeCompany::where('governancePracticeCompanyId', $activitiesCompany->governancePracticeCompanyId)
                ->value('governancePracticeId');

            return response()->json([
                'company_id' => $activitiesCompany->companyId,
                'domain_id' => $request->input('domainId'),
                'gov_obj_id' => $request->input('governanceObjectId'),
                'gov_prac_id' => $governancePracticeId,
                'message' => 'final',
            ]);
        }
    }

    public function result($companyId, $domainId, $governanceObjectId, $governancePracticeId)
    {
        $user = auth()->user();

        $userCompany = UserCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->with('company')
            ->first();

        if (!$userCompany) {
            return redirect()->back()->withErrors(['message' => 'Company not found.']);
        }

        $domainCompany = DomainCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('domainId', $domainId)
            ->with('domain')
            ->first();

        if (!$domainCompany) {
            return redirect()->back()->withErrors(['message' => 'Domain not found.']);
        }

        $governanceObjectCompany = GovernanceObjectCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governanceObjectId', $governanceObjectId)
            ->with('governanceObject')
            ->first();

        if (!$governanceObjectCompany) {
            return redirect()->back()->withErrors(['message' => 'Governance Object not found.']);
        }

        $governancePracticeCompany = GovernancePracticeCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeId', $governancePracticeId)
            ->with('governancePractice')
            ->first();

        if (!$governancePracticeCompany) {
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
