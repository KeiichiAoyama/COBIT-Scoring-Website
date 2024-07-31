<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'activities';

    protected $primaryKey = 'activitiesId';

    public $incrementing = false; // jika primary key bukan auto increment
    
    protected $keyType = 'string'; // jika primary key tipe string

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
