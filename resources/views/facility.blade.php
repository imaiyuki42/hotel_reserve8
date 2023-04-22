@extends('layouts.app')

@section('content')
<h1>施設案内</h1>

@foreach ($facility_info as $facility_info)
<img src="{{ asset('images/'.$facility_info->facility_image) }}" alt="施設案内">
<h3>{{ $facility_info->facility_name }}</h3>
<p>{{ $facility_info->facility_catch_copy }}</p>
@endforeach

@component('components.hotel_reservation_search')

@endcomponent

@endsection