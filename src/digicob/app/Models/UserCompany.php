<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCompany extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'userCompany';

    protected $primaryKey = 'userCompanyId';

    protected $fillable = [
        'userId',
        'companyId',
        'userCompanyScore',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'companyId');
    }
}
