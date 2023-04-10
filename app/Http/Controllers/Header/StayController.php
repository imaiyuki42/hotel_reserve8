<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StayController extends Controller
{
    public function index()
    {
        return view('stay.stay');
    }

    public function result(Request $request)
    {
        dd($request);
        $checkin_date = $request->inout('checkin_date');
        $checkout_date = $request->inout('checkout_date');
        $use_count_adult = $request->inout('use_count_adult');
        $use_room_count = $request->inout('use_room_count');

        return view('stay.result');
    }
}
