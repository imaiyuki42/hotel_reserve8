<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Reservation;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**トップ画面表示 */
    public function index()
    {
        return view('home');
    }
}
