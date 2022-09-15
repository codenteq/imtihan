<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInfo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'phone',
        'address',
        'status',
        'period_id',
        'month_id',
        'group_id',
        'language_id',
        'company_id',
        'user_id'
    ];

    //TODO: getter setter eklenecek
}
