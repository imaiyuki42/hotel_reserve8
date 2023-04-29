@extends('layouts.app')

@section('content')

<div class="room__wrapper">

    <div class="room__title-container">
        <span class="room__sub-title">Room List</span>
        <h2 class="room__title">客室一覧</h2>
    </div>

    <!-- おすすめプラン-item -->
    <div class="room__grid-container">
        @foreach ($rooms as $room)
        <div class="room__grid-item">
            <img class="room__img" src="{{ asset('images/'.$room->room_image) }}" alt="客室画像">
            <h3 class="room__name">{{ $room->room_name }}</h3>
            <p class="room__description">{{ $room->room_description }}</p>
            <a class="room__button" href="{{ route('stay.room.detail', $room->room_id) }}">詳細を見る</a>
        </div>
        @endforeach
    </div>

</div>

@component('components.hotel_reservation_search')

@endcomponent


@endsection