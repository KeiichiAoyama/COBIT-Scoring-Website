<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActivitiesCompany;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $activityCompanies = ActivitiesCompany::where('userId', 3)
            ->where('companyId', 4)
            ->where('governancePracticeCompanyId', 10)
            ->with('activities.governancePractice')
            ->with('user')
            ->with('governancePracticeCompany')
            ->get();
        return view('pdf.pdf', ['activityCompanies' => $activityCompanies]);
    }
}
