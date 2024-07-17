<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'userId';

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userCompanies()
    {
        return $this->hasMany(UserCompany::class, 'userId');
    }

    public function domainCompanies()
    {
        return $this->hasMany(DomainCompany::class, 'userId');
    }

    public function governanceObjectCompanies()
    {
        return $this->hasMany(GovernanceObjectCompany::class, 'userId');
    }

    public function governancePracticeCompanies()
    {
        return $this->hasMany(GovernancePracticeCompany::class, 'userId');
    }

    public function activitiesCompanies()
    {
        return $this->hasMany(ActivitiesCompany::class, 'userId');
    }
}
