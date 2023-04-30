<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'reservations';
    protected $primaryKey = 'restaurant_id';
    protected $fillable = [
        'restaurant_name',
        'restaurant_description',
        'restaurant_price',
        'restaurant_image',
        'restaurant_phone_number',
        'restaurant_open_time',
        'restaurant_close_time',
    ];

    public function restaurant_reservations()
    {
        return $this->belongsTo(RestaurantReservation::class);
    }

    public function fairs()
    {
        return $this->hasMany(Fair::class);
    }
}
