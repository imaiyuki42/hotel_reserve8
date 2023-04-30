<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';
    protected $primaryKey = 'reservation_id';
    protected $fillable = [
        'user_id',
        'room_id',
        'plan_id',
        'checkin_date',
        'checkout_date',
        'number_of_guests',
        'room_use_number',
        'room_number',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
}
