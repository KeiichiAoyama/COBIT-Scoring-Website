<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitiesCompany extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'activitiesCompany';

    protected $primaryKey = 'activitiesCompanyId';

    protected $fillable = [
        'userId',
        'companyId',
        'governancePracticeCompanyId',
        'activitiesId',
        'activitiesCompanyScore',
        'activitiesCompanyFindings',
        'activitiesCompanyImpact',
        'activitiesCompanyRecommendations',
        'activitiesCompanyResponse',
        'activitiesCompanyStatus',
        'activitiesCompanyDeadline',
        'activitiesCompanyPersonInCharge',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'companyId');
    }

    public function governancePracticeCompany()
    {
        return $this->belongsTo(GovernancePracticeCompany::class, 'governancePracticeCompanyId');
    }

    public function activities()
    {
        return $this->belongsTo(Activities::class, 'activitiesId');
    }
}
