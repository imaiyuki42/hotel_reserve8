<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BanquetHall;

class BanquetController extends Controller
{
    public function index()
    {
        $banquet_info = BanquetHall::all();

        $banquet = BanquetHall::all();

        return view('banquet', compact('banquet_info', 'banquet'));
    }
}
