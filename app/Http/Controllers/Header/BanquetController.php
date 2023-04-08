<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BanquetController extends Controller
{
    public function index() {
        return view('banquet');
    }
}
