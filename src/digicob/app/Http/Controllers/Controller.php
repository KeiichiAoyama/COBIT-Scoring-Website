<?php

namespace App\Http\Controllers;

use App\Models\DomainCompany;
use App\Models\GovernanceObjectCompany;
use App\Models\GovernancePractice;
use App\Models\GovernancePracticeCompany;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function updateAverage($userCompany, $domainCompany, $governanceObjectCompany, $governancePracticeCompany, $averageActivityScore)
    {
        $userId = $userCompany->userId;
        $companyId = $userCompany->companyId;

        $maxLevel = GovernancePractice::select('governancePracticeAvailableLevels')
            ->where('governancePracticeId', $governancePracticeCompany->governancePracticeId)
            ->first();

        $governancePracticeCompany->governancePracticeCompanyScore = $averageActivityScore;
        $governancePracticeCompany->governancePracticeCompanyLevel = $this->updateLevel($averageActivityScore, $governancePracticeCompany->governancePracticeCompanyLevel, $maxLevel);
        $governancePracticeCompany->save();

        $averageGovPracScore = GovernancePracticeCompany::where('userId', $userId)
            ->where('companyId', $companyId)
            ->where('governanceObjectCompanyId', $governanceObjectCompany->governanceObjectCompanyId)
            ->avg('governancePracticeCompanyScore');

        $governanceObjectCompany->governanceObjectCompanyScore = $averageGovPracScore;
        $governanceObjectCompany->governanceObjectCompanyLevel = $this->updateLevel($averageGovPracScore, $governanceObjectCompany->governanceObjectCompanyLevel, $maxLevel);
        $governanceObjectCompany->save();

        $averageGovObjScore = GovernanceObjectCompany::where('userId', $userId)
            ->where('companyId', $companyId)
            ->where('domainCompanyId', $domainCompany->domainCompanyId)
            ->avg('governanceObjectCompanyScore');

        $domainCompany->domainCompanyScore = $averageGovObjScore;
        $domainCompany->domainCompanyLevel = $this->updateLevel($averageGovObjScore, $domainCompany->domainCompanyLevel, $maxLevel);
        $domainCompany->save();

        $averageDomainScore = DomainCompany::where('userId', $userId)
            ->where('companyId', $companyId)
            ->avg('domainCompanyScore');

        $userCompany->userCompanyScore = $averageDomainScore;
        $userCompany->save();
    }

    public function updateLevel($score, $level, $maxLevel)
    {
        if($score >= 85.0){
            $newLevel = null;

            switch($level){
                case null:
                    $newLevel = 2;
                    break;
                case 2:
                    $newLevel = 3;
                    break;
                case 3:
                    $newLevel = 4;
                    break;
                case 4:
                    $newLevel = 5;
                    break;
            }

            if($newLevel > $level){
                $newLevel = $level;
            }

            $level = $newLevel;
        }

        return $level;
    }

    public function alphabeticalScore($numericScore)
    {
        $alphabeticScore = null;

        if($numericScore >= 85.0){
            $alphabeticScore = "F";
        }elseif($numericScore >= 55.0 && $numericScore < 85.0){
            $alphabeticScore = "P";
        }elseif($numericScore < 55.0){
            $alphabeticScore = "N";
        }

        return $alphabeticScore;
    }
}
