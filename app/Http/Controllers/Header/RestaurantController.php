<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Fair;

class RestaurantController extends Controller
{
    public function index()
    {
        //おすすめのフェア情報をDBから取得する
        $recommended_fair_info = Fair::where('recommended_flag', '=', '1')
            ->get();

        //現在開催されているフェア情報を取得する
        $fair_info = Fair::where('fair_end_date', '>', now())
            ->get();

        //全てのレストラン情報をDBから取得する
        $restaurant_info = Restaurant::all();

        return view('restaurant', compact('recommended_fair_info', 'fair_info', 'restaurant_info'));
    }
}
