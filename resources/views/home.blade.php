@extends('layouts.app')

@section('content')

<h1>トップ画面</h1>

<!-- TOPカルーセル機能 -->
<div class="carousel">
    <img class="carousel-img" src="{{ asset('images/top_1.jpg') }}" alt="スライダー1">
    <img class="carousel-img" src="{{ asset('images/top_2.jpg') }}" alt="スライダー2">
    <img class="carousel-img" src="{{ asset('images/top_3.jpg') }}" alt="スライダー3">
    <img class="carousel-img" src="{{ asset('images/top_4.jpg') }}" alt="スライダー4">
</div>

<!-- 予約検索 -->
<div class="">
    <form action="{{ route('stay.search') }}" method="post">
        @csrf
        <div class="date-picker">
            <h3>チェックイン日</h3>
            <input type="text" id="checkin_datepicker" name="checkin_date">
        </div>

        <div class="date-picker">
            <h3>チェックアウト日</h3>
            <input type="text" id="checkout_datepicker" name="checkout_date">
        </div>

        <h3>一部屋のご利用人数</h3>
        <select name="use_count_adult" id="">
            <option value="1">大人1名</option>
            <option value="2">大人2名</option>
            <option value="3">大人3名</option>
            <option value="4">大人4名</option>
        </select>

        <h3>ご利用部屋数</h3>
        <select name="use_room_count" id="">
            <option value="1">1部屋</option>
            <option value="2">2部屋</option>
            <option value="3">3部屋</option>
            <option value="4">4部屋</option>
        </select>

        <button type="submit">検索する</button>
    </form>

</div>

<h2>{{ Auth::user()->name }}さんの予約状況</h2>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>ログアウト</button>
</form>

@endsection