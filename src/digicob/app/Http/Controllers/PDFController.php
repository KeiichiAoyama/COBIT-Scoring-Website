<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActivitiesCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $companyId = $request->input('companyId');
        $govPracCompId = $request->input('governancePracticeCompanyId');
        $user = Auth::user();

        $activityCompanies = ActivitiesCompany::where('userId', $user->userId)
            ->where('companyId', $companyId)
            ->where('governancePracticeCompanyId', $govPracCompId)
            ->with('activities.governancePractice')
            ->with('user')
            ->with('governancePracticeCompany')
            ->get();

        if (count($activityCompanies) > 0) {
            /* Log::info(view('pdf.pdf', ['activityCompanies' => $activityCompanies])->render()); */

            $html = view('pdf.pdf', ['activityCompanies' => $activityCompanies])->render();
            $pdf = PDF::loadHTML($html);
            return $pdf->download('Cobit_Report.pdf');
        }

        return response()->json([], 204);
    }
}
