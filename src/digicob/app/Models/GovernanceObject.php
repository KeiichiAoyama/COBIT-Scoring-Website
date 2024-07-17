<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovernanceObject extends Model
{
    use HasFactory;

    protected $table = 'governanceObject';

    protected $primaryKey = 'governanceObjectId';

    protected $fillable = [
        'governanceObjectName',
        'domainId',
    ];

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domainId');
    }

    public function governanceObjectCompanies()
    {
        return $this->hasMany(GovernanceObjectCompany::class, 'governanceObjectId');
    }

    public function governancePractices()
    {
        return $this->hasMany(GovernancePractice::class, 'governanceObjectId');
    }
}
