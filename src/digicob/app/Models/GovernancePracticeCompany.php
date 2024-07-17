<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovernancePracticeCompany extends Model
{
    use HasFactory;

    protected $table = 'governancePracticeCompany';

    protected $primaryKey = 'governancePracticeCompanyId';

    protected $fillable = [
        'userId',
        'companyId',
        'governancePracticeId',
        'governanceObjectCompanyId',
        'governancePracticeCompanyScore',
        'governancePracticeCompanyLevel',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'companyId');
    }

    public function governancePractice()
    {
        return $this->belongsTo(GovernancePractice::class, 'governancePracticeId');
    }

    public function governanceObjectCompany()
    {
        return $this->belongsTo(GovernanceObjectCompany::class, 'governanceObjectCompanyId');
    }
}
