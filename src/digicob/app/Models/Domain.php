<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'domain';

    protected $primaryKey = 'domainId';

    protected $fillable = [
        'domainName',
    ];

    public function domainCompanies()
    {
        return $this->hasMany(DomainCompany::class, 'domainId');
    }

    public function governanceObjects()
    {
        return $this->hasMany(GovernanceObject::class, 'domainId');
    }
}
