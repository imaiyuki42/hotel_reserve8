<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;


class FacilityController extends Controller
{
    public function index()
    {

        $facility_info = Facility::all();

        return view('facility', compact('facility_info'));
    }
}
