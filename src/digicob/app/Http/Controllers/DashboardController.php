<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Domain;
use App\Models\Company;
use App\Models\Activities;

use App\Models\UserCompany;
use Illuminate\Http\Request;
use App\Models\DomainCompany;
use App\Models\GovernanceObject;
use App\Models\ActivitiesCompany;
use App\Models\GovernancePractice;
use Illuminate\Support\Facades\Auth;
use App\Models\GovernanceObjectCompany;
use App\Models\GovernancePracticeCompany;

use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user();

        $user = User::find($users->userId);

        $userCompanyList = $user->userCompanies()->with('company')->get();

        $companyIds = $userCompanyList->pluck('companyId');

        $domainCompanyList = DomainCompany::where('userId', $user->userId)
            ->whereIn('companyId', $companyIds)
            ->with('domain')
            ->get();

        return view('index', compact('userCompanyList', 'domainCompanyList'));
    }

    public function newCompany(){
        return view('new-company');
    }
    public function addNewCompany(Request $request)
    {
        Log::info($request);

        $validated = $request->validate([
            'companyName' => 'required|string|max:255',
            'companyIndustry' => 'required|string|max:255',
            'companyAddress' => 'required|string|max:255',
            'companyLogo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $user = auth()->user();

        $company = Company::where('companyName', $validated['companyName'])
        ->where('companyIndustry', $validated['companyIndustry'])
        ->where('companyAddress', $validated['companyAddress'])
        ->first();

        if(!$company){
            $company = new Company();
            $company->companyName = $validated['companyName'];
            $company->companyIndustry = $validated['companyIndustry'];
            $company->companyAddress = $validated['companyAddress'];

            $imageName = time() . '.' . $validated['companyLogo']->extension();
            $validated['companyLogo']->move(public_path('images'), $imageName);
            $company->companyLogo = 'images/' . $imageName;

            $company->save();
        }

        $userCompany = UserCompany::where('userId', $user->userId)
        ->where('companyId', $company->companyId)
        ->first();

        if($userCompany){
            return response()->json(['message' => 'Company already exists.'], 409);
        }

        $userCompany = new UserCompany();
        $userCompany->userId = $user->userId;
        $userCompany->companyId = $company->companyId;
        $userCompany->userCompanyScore = 0.0;
        $userCompany->save();

        $domains = Domain::all();
        $governanceObjects = GovernanceObject::all();
        $governancePractices = GovernancePractice::all();
        $activities = Activities::all();

        foreach ($domains as $domain) {
            $domainCompany = new DomainCompany();
            $domainCompany->userId = $user->userId;
            $domainCompany->companyId = $company->companyId;
            $domainCompany->domainId = $domain->domainId;
            $domainCompany->save();

            foreach ($governanceObjects as $governanceObject) {
                $governanceObjectCompany = new GovernanceObjectCompany();
                $governanceObjectCompany->userId = $user->userId;
                $governanceObjectCompany->companyId = $company->companyId;
                $governanceObjectCompany->domainCompanyId = $domainCompany->domainCompanyId;
                $governanceObjectCompany->governanceObjectId = $governanceObject->governanceObjectId;
                $governanceObjectCompany->save();

                foreach ($governancePractices as $governancePractice) {
                    $governancePracticeCompany = new GovernancePracticeCompany();
                    $governancePracticeCompany->userId = $user->userId;
                    $governancePracticeCompany->companyId = $company->companyId;
                    $governancePracticeCompany->governanceObjectCompanyId = $governanceObjectCompany->governanceObjectCompanyId;
                    $governancePracticeCompany->governancePracticeId = $governancePractice->governancePracticeId;
                    $governancePracticeCompany->save();

                    foreach ($activities as $activity) {
                    if (strpos($activity->governancePracticeId, $governancePractice->governancePracticeId) === 0) {
                        $activitiesCompany = new ActivitiesCompany();
                        $activitiesCompany->userId = $user->userId;
                        $activitiesCompany->companyId = $company->companyId;
                        $activitiesCompany->governancePracticeCompanyId = $governancePracticeCompany->governancePracticeCompanyId;
                        $activitiesCompany->activitiesId = $activity->activitiesId;
                        $activitiesCompany->save();
                    }
                }
                }
            }
        }

        return redirect()->route('dashboard')->with('success', 'Company has been added successfully.');
    }
}
