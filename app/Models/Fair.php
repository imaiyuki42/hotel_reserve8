<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fair extends Model
{
    use HasFactory;

    protected $table = 'fairs';
    protected $primaryKey = 'fair_id';
    protected $fillable = [
        'restaurant_id',
        'fair_name',
        'fair_start_date',
        'fair_end_date',
        'fair_price_lunch',
        'fair_price_dinner',
        'fair_description',
        'fair_image',
        'recommended_flag',
    ];

    public function restaurants()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
