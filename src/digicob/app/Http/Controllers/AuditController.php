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

    public function question($companyId, $domainId, $governanceObjectId, $governancePracticeId, $activitiesId)
    {
        $user = auth()->user();

        // Retrieve the user company
        $userCompany = UserCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->with('company')
            ->first();

        if (!$userCompany) {
            return redirect()->back()->withErrors(['message' => 'Company not found.']);
        }

        // Retrieve the governance practice company
        $governancePracticeCompany = GovernancePracticeCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeId', $governancePracticeId)
            ->with('governancePractice')
            ->first();

        if (!$governancePracticeCompany) {
            return redirect()->back()->withErrors(['message' => 'Governance Practice not found.']);
        }

        if ($activitiesId === 'start') {
            // Find the first activity
            $activitiesCompany = ActivitiesCompany::where('userId', $user->userId)
                ->where('companyId', $companyId)
                ->where('governancePracticeCompanyId', $governancePracticeCompany->governancePracticeCompanyId)
                ->orderBy('activitiesCompanyId', 'asc')
                ->first();

            if (!$activitiesCompany) {
                return redirect()->back()->withErrors(['message' => 'No activities found.']);
            }
        } else {
            // Find the specific activity
            $activitiesCompany = ActivitiesCompany::where('activitiesId', $activitiesId)
                ->where('userId', $user->userId)
                ->where('companyId', $companyId)
                ->where('governancePracticeCompanyId', $governancePracticeCompany->governancePracticeCompanyId)
                ->first();

            if (!$activitiesCompany) {
                return redirect()->back()->withErrors(['message' => 'Activity not found.']);
            }
        }

        // Log the data
        Log::info('User Company Data:', ['userCompany' => $userCompany]);
        Log::info('Governance Practice Company Data:', ['governancePracticeCompany' => $governancePracticeCompany]);
        Log::info('Current Activities Company Data:', ['activitiesCompany' => $activitiesCompany]);

        // Return the view with the data
        return view('questions', [
            'userCompany' => $userCompany,
            'governancePracticeCompany' => $governancePracticeCompany,
            'activitiesCompany' => $activitiesCompany,
            'isStart' => $activitiesId === 'start', // Add flag to indicate if it's the start
        ]);
    }

    public function saveAuditNext(Request $request)
    {
        // Validate the request
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

        // Find the current ActivitiesCompany record
        $activitiesCompany = ActivitiesCompany::where('activitiesCompanyId', $validated['activitiesCompanyId'])->first();

        if (!$activitiesCompany) {
            return redirect()->back()->withErrors(['message' => 'Activity not found.']);
        }

        // Update the current ActivitiesCompany record
        $activitiesCompany->update([
            'activitiesCompanyScore' => $validated['activitiesCompanyScore'],
            'activitiesCompanyFindings' => $validated['activitiesCompanyFindings'],
            'activitiesCompanyImpact' => $validated['activitiesCompanyImpact'],
            'activitiesCompanyRecommendations' => $validated['activitiesCompanyRecommendations'],
            'activitiesCompanyResponse' => $validated['activitiesCompanyResponse'],
            'activitiesCompanyStatus' => $validated['activitiesCompanyStatus'],
            'activitiesCompanyDeadline' => $validated['activitiesCompanyDeadline'],
            'activitiesCompanyPersonInCharge' => $validated['activitiesCompanyPersonInCharge'],
        ]);

        // Find the next ActivitiesCompany record
        $nextActivitiesCompany = ActivitiesCompany::where('userId', $activitiesCompany->userId)
            ->where('companyId', $activitiesCompany->companyId)
            ->where('governancePracticeCompanyId', $activitiesCompany->governancePracticeCompanyId)
            ->where('activitiesCompanyId', '>', $activitiesCompany->activitiesCompanyId)
            ->orderBy('activitiesCompanyId', 'asc')
            ->first();

        if ($nextActivitiesCompany) {
            // Retrieve related data
            $user = auth()->user();
            $companyId = $nextActivitiesCompany->companyId;
            $domainId = $request->input('domainId');
            $governanceObjectId = $request->input('governanceObjectId');
            $governancePracticeId = $nextActivitiesCompany->governancePracticeCompanyId;

            $userCompany = UserCompany::where('userId', $user->userId)
                ->where('companyId', $companyId)
                ->with('company')
                ->first();

            $governancePracticeCompany = GovernancePracticeCompany::where('userId', $user->userId)
                ->where('companyId', $companyId)
                ->where('governancePracticeCompanyId', $governancePracticeId)
                ->with('governancePractice')
                ->first();

            // Log the data
            Log::info('User Company Data:', ['userCompany' => $userCompany]);
            Log::info('Governance Practice Company Data:', ['governancePracticeCompany' => $governancePracticeCompany]);
            Log::info('Next Activities Company Data:', ['activitiesCompany' => $nextActivitiesCompany]);

            // Redirect to the new route with parameters
            return redirect()->route('audit_question', [
                'company_id' => $companyId,
                'domain_id' => $domainId,
                'gov_obj_id' => $governanceObjectId,
                'gov_prac_id' => $governancePracticeId,
                'activity_id' => $nextActivitiesCompany->activitiesCompanyId,
            ]);
        } else {
            // Handle the case where there are no more activities
            return redirect()->route('audit_result', [
                'company_id' => $activitiesCompany->companyId,
                'domain_id' => $request->input('domainId'),
                'gov_obj_id' => $request->input('governanceObjectId'),
                'gov_prac_id' => $activitiesCompany->governancePracticeCompanyId,
            ])->with('message', 'All activities completed.');
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
