<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'company';

    protected $primaryKey = 'companyId';

    protected $fillable = [
        'companyName',
        'companyIndustry',
        'companyAddress',
    ];

    public function userCompanies()
    {
        return $this->hasMany(UserCompany::class, 'companyId');
    }

    public function domainCompanies()
    {
        return $this->hasMany(DomainCompany::class, 'companyId');
    }

    public function governanceObjectCompanies()
    {
        return $this->hasMany(GovernanceObjectCompany::class, 'companyId');
    }

    public function governancePracticeCompanies()
    {
        return $this->hasMany(GovernancePracticeCompany::class, 'companyId');
    }

    public function activitiesCompanies()
    {
        return $this->hasMany(ActivitiesCompany::class, 'companyId');
    }
}
