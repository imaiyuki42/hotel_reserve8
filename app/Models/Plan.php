<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';
    protected $primaryKey = 'plan_id';
    protected $fillable = [
        'plan_name',
        'plan_catch_copy',
        'plan_description',
        'plan_price',
        'plan_image',
        'checkin_time',
        'checkout_time',
        'meal',
        'recommended_flag',
    ];
}
