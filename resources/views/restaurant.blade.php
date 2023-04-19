@extends('layouts.app')

@section('content')

<div id="restaurant-wrapper">
    <div class="restaurant-container">
        <h1 class="restaurant-title">レストラン</h1>
        <div class="restaurant-main__img-container">
            <img class="restaurant-main__img" src="{{ asset('images/restaurant_1.jpg') }}" alt="レストラントップ画像">
        </div>

        <!-- おすすめフェア情報を表示する -->
        <h2 class="restaurant-recommend_fair__title">おすすめフェア</h2>
        @foreach ($recommended_fair_info as $recommended_fair_info)
        <img src="{{ asset('images/'.$recommended_fair_info->fair_image) }}" alt="レストラン画像">
        <h3>{{ $recommended_fair_info->fair_name }}</h3>
        <p>【開催期間】{{ $recommended_fair_info->fair_start_date }} 〜 {{ $recommended_fair_info->fair_end_date }}</p>
        <p>{{ $recommended_fair_info->fair_description }}</p>

        @endforeach

        <h2>フェア情報</h2>
        @foreach ($fair_info as $fair_info)
        <h3>{{ $fair_info->fair_name }}</h3>
        <p>{{ $fair_info->fair_description }}</p>
        <p>【開催期間】{{ $fair_info->fair_start_date }} 〜 {{ $fair_info->fair_end_date }}</p>
        <p>【料金】ランチ {{ $fair_info->fair_price_lunch }}円 / {{ $fair_info->fair_price_dinner }}円</p>
        <img src="{{ asset('images/'.$fair_info->fair_image) }}" alt="レストラン画像">
        @endforeach

        <!-- レストラン情報を表示 -->
        <h2>レストラン情報</h2>
        @foreach ($restaurant_info as $restaurant_info)
        <img src="{{ asset('images/'.$restaurant_info->restaurant_image) }}" alt="レストラン画像">
        <h3>{{ $restaurant_info->restaurant_name }}</h3>
        <p>{{ $restaurant_info->restaurant_description }}</p>
        <p>レストラン料金{{ $restaurant_info->restaurant_price }}円</p>
        <p>営業時間：{{ $restaurant_info->restaurant_open_time }} 〜 {{ $restaurant_info->restaurant_close_time }}</p>
        <button type="submit">予約をする</button>
        @endforeach
    </div>
</div>

@endsection