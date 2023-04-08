<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StayController extends Controller
{
    public function index() {
        return view('stay');
    }
}
