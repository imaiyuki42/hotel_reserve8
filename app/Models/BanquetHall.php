<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanquetHall extends Model
{
    use HasFactory;

    protected $table = 'banquet_halls';
    protected $primaryKey = 'banquet_hall_id';
    protected $fillable = [
        'hall_name',
        'hall_area',
        'tsubo_area',
        'standing_style_fit_count',
        'dinner_style_fit_count',
        'buffet_style_fit_count',
        'theater_style_fit_count',
        'banquet_catch_copy',
        'banquet_description',
        'banquet_image',
    ];

    public function banquet_reservations()
    {
        return $this->belongsTo(BanquetReservation::class);
    }
}
