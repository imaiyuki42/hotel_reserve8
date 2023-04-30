<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantReservation extends Model
{
    use HasFactory;

    protected $table = 'restaurant_reservations';
    protected $primaryKey = 'restaurant_reservation_id';
    protected $fillable = [
        'user_id',
        'restaurant_id',
        'restaurant_reservation_date',
        'restaurant_reservation_time',
        'restaurant_reservation_count',
    ];

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }
}
