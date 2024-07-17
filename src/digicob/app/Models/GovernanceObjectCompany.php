<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovernanceObjectCompany extends Model
{
    use HasFactory;

    protected $table = 'governanceObjectCompany';

    protected $primaryKey = 'governanceObjectCompanyId';

    protected $fillable = [
        'userId',
        'companyId',
        'domainCompanyId',
        'governanceObjectId',
        'governanceObjectCompanyScore',
        'governanceObjectCompanyLevel',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'companyId');
    }

    public function domainCompany()
    {
        return $this->belongsTo(DomainCompany::class, 'domainCompanyId');
    }

    public function governanceObject()
    {
        return $this->belongsTo(GovernanceObject::class, 'governanceObjectId');
    }
}
