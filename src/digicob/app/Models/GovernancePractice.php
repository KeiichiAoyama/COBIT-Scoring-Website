<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovernancePractice extends Model
{
    use HasFactory;

    protected $table = 'governancePractice';

    protected $primaryKey = 'governancePracticeId';

    protected $fillable = [
        'governancePracticeName',
        'governanceObjectId',
    ];

    public function governanceObject()
    {
        return $this->belongsTo(GovernanceObject::class, 'governanceObjectId');
    }

    public function governancePracticeCompanies()
    {
        return $this->hasMany(GovernancePracticeCompany::class, 'governancePracticeId');
    }

    public function activities()
    {
        return $this->hasMany(Activities::class, 'governancePracticeId');
    }
}
