<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_ACTIVE = 1;

    const STATUS_INACTIVE = 0;

    protected $fillable = [
        'name',
        'subdomain',
        'is_active',
        'tax_id',
        'email',
        'web_url',
        'phone',
        'logo',
        'country_id',
        'city_id',
        'state_id',
        'address',
        'zip_code',
    ];

    //TODO: Invoice waiting...
}
