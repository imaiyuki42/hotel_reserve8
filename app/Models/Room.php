<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $primaryKey = 'room_id';
    protected $fillable = [
        'room_name',
        'bed_count',
        'max_capacity',
        'bed_type',
        'smoking',
        'room_price',
        'room_image',
        'room_description',
    ];

    public function reservations()
    {
        return $this->belongsTo(Reservation::class);
    }
}
