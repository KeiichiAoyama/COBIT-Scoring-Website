<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\UserCompany;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        $userCompanyList = $user->userCompanies()->with('company')->get();

        return view('dashboard', compact('userCompanyList'));
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

        $userCompany = new UserCompany();
        $userCompany->userId = $user->userId;
        $userCompany->companyId = $company->companyId;
        $userCompany->userCompanyScore = 0.0;
        $userCompany->save();

        return response()->json(['message' => 'Company has been added successfully.'], 200);
    }
}
