<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanquetReservation extends Model
{
    use HasFactory;

    protected $table = 'banquet_reservations';
    protected $primaryKey = 'banquet_reservation_id';
    protected $fillable = [
        'banquet_hall_id',
        'banquet_user_id',
        'banquet_reservation_date',
        'banquet_reservation_time',
    ];

    public function banquet_halls()
    {
        return $this->hasMany(BanquetHall::class);
    }
}
