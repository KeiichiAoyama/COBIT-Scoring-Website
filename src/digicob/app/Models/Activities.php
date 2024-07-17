<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

    protected $table = 'activities';

    protected $primaryKey = 'activitiesId';

    protected $fillable = [
        'activitiesName',
        'activitiesQuestion',
        'activitiesQuestionLevel',
        'governancePracticeId',
    ];

    public function governancePractice()
    {
        return $this->belongsTo(GovernancePractice::class, 'governancePracticeId');
    }

    public function activitiesCompanies()
    {
        return $this->hasMany(ActivitiesCompany::class, 'activitiesId');
    }
}
