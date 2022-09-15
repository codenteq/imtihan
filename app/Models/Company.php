<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'subdomain',
        'status',
        'tax_id',
        'email',
        'web_url',
        'phone',
        'country_id',
        'city_id',
        'state_id',
        'address',
        'zip_code',
        'logo',
        'plan_id',
    ];
    //TODO: Invoice eklenecek
}
