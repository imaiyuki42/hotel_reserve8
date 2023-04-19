@extends('layouts.app')

@section('content')

<!-- TOPカルーセル機能 -->
<div class="carousel">
    <img class="carousel__img" src="{{ asset('images/top_1.jpg') }}" alt="スライダー1">
    <img class="carousel__img" src="{{ asset('images/top_2.jpg') }}" alt="スライダー2">
    <img class="carousel__img" src="{{ asset('images/top_3.jpg') }}" alt="スライダー3">
    <img class="carousel__img" src="{{ asset('images/top_4.jpg') }}" alt="スライダー4">
    <img class="carousel__img" src="{{ asset('images/top_5.jpg') }}" alt="スライダー5">
</div>

<!-- 予約検索 -->
<div class="top-search">
    <form action="{{ route('stay.search') }}" method="post">
        @csrf
        <div class="date-picker" id="top-search-checkin__container">
            <h3 class="top-search-checkin__title">チェックイン日</h3>
            <input type="text" id="checkin_datepicker" name="checkin_date">
        </div>

        <div class="date-picker" id="top-search-checkout__container">
            <h3 class="top-search-checkout__title">チェックアウト日</h3>
            <input type="text" id="checkout_datepicker" name="checkout_date">
        </div>

        <div class="top-search-reserve-info">
            <div class="top-search-user-count__container">
                <h3 class="top-search-user-count__title">1部屋のご利用人数</h3>
                <select name="number_of_guests" class="top-search-user-count__select">
                    <option value="1">大人1名</option>
                    <option value="2">大人2名</option>
                    <option value="3">大人3名</option>
                    <option value="4">大人4名</option>
                </select>
            </div>

            <div class="top-search-room-count__container">
                <h3 class="top-search-room-count__title">ご利用部屋数</h3>
                <select name="room_use_number" class="top-search-room-count__select">
                    <option value="1">1部屋</option>
                    <option value="2">2部屋</option>
                    <option value="3">3部屋</option>
                    <option value="4">4部屋</option>
                </select>
            </div>
        </div>

        <div class="top-search-search-button__container">
            <button class="top-search-search-button" type="submit">検索する</button>
        </div>
    </form>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button>ログアウト</button>
    </form>
</div>

@endsection