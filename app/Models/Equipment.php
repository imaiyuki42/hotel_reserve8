<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments';
    protected $primaryKey = 'equipment_id';
    protected $fillable = [
        'room_id',
        'equipment_name',
    ];

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }
}
