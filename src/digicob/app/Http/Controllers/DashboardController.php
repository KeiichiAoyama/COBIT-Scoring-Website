<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\DomainCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\UserCompany;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        $userCompanyList = $user->userCompanies()->with('company')->get();

        $companyIds = $userCompanyList->pluck('companyId');

        $domainCompanyList = DomainCompany::where('userId', $user->userId)
            ->where('companyId', $companyIds)
            ->with('domain')
            ->get();

        return view('dashboard', compact('userCompanyList', 'domainCompanyList'));
    }

    public function addNewCompany(Request $request)
    {
        $validated = $request->validate([
            'companyName' => 'required|string|max:255',
            'companyIndustry' => 'required|string|max:255',
            'companyAddress' => 'required|string|max:255',
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

        return response()->json(['message' => 'Company has been added successfully.'], 201);
    }
}
