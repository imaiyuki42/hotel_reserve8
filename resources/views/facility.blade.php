@extends('layouts.app')

@section('content')

<!-- facility -->
<div class="facility-wrapper">

    <!-- main-title -->
    <h1 class="facility-title">施設案内</h1>
    <div class="facility-main__img-container">
        <img class="facility-main__img" src="{{ asset('images/spa_1.jpg') }}" alt="レストラントップ画像">
    </div>

    <div class="facility__title-container">
        <span class="facility__sub-title">Facility</span>
        <h2 class="facility__title">施設一覧</h2>
    </div>

    <div class="facility__grid-container">
        @foreach ($facility_info as $facility_info)
        <div class="facility__grid-item">
            <img class="facility__img" src="{{ asset('images/'.$facility_info->facility_image) }}" alt="施設案内">
            <h3 class="facility__name">{{ $facility_info->facility_name }}</h3>
            <p class="facility__catch-copy">{{ $facility_info->facility_catch_copy }}</p>
        </div>
        @endforeach
    </div>
</div>

@component('components.hotel_reservation_search')

@endcomponent

@endsection