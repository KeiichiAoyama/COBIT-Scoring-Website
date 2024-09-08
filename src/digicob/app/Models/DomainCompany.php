<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainCompany extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'domainCompany';

    protected $primaryKey = 'domainCompanyId';

    protected $fillable = [
        'userId',
        'companyId',
        'domainId',
        'domainCompanyScore',
        'domainCompanyLevel',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'companyId');
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domainId');
    }
}
