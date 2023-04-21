@extends('layouts.app')

@section('content')

<!-- restaurant -->
<div id="restaurant-wrapper">

    <h1 class="restaurant-title">レストラン</h1>
    <div class="restaurant-main__img-container">
        <img class="restaurant-main__img" src="{{ asset('images/restaurant_1.jpg') }}" alt="レストラントップ画像">
    </div>

    <!-- おすすめフェア-title -->
    <div class="restaurant-recommended-fair__container">
        <div class="restaurant-recommended-fair__title-container">
            <span class="restaurant-recommended-fair__sub-title">Recommended Fair</span>
            <h2 class="restaurant-recommended-fair__title">おすすめフェア</h2>
        </div>

        <!-- おすすめフェア-item -->
        <div class="restaurant-recommended-fair__grid-container">
            @foreach ($recommended_fair_info as $recommended_fair_info)
            <div class="restaurant-recommended-fair__grid-item">
                <img class="restaurant-recommended-fair__img" src="{{ asset('images/'.$recommended_fair_info->fair_image) }}" alt="レストラン画像">
                <h3 class="restaurant-recommended-fair__name">{{ $recommended_fair_info->fair_name }}</h3>
                <p class="restaurant-recommended-fair__description">{{ $recommended_fair_info->fair_description }}</p>
                <p class="restaurant-recommended-fair__event_date">【開催期間】{{ $recommended_fair_info->fair_start_date }} 〜 {{ $recommended_fair_info->fair_end_date }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- フェア情報 -->
    <div class="restaurant-fair__container">

        <div class="restaurant-fair__title-container">
            <span class="restaurant-fair__sub-title">Fair</span>
            <h2 class="restaurant-fair__title">フェア情報</h2>
        </div>

        <div class="restaurant-fair__grid-container">

            @foreach ($fair_info as $fair_info)
            <div class="restaurant-recommended-fair__grid-item">
                <img class="restaurant-fair__img" src="{{ asset('images/'.$fair_info->fair_image) }}" alt="レストラン画像">
                <h3 class="restaurant-fair__name">{{ $fair_info->fair_name }}</h3>
                <p class="restaurant-fair__description">{{ $fair_info->fair_description }}</p>
                <p class="restaurant-fair__event_date">【開催期間】{{ $fair_info->fair_start_date }} 〜 {{ $fair_info->fair_end_date }}</p>
                <p class="restaurant-fair__price">【料金】ランチ {{ $fair_info->fair_price_lunch }}円 / ディナー {{ $fair_info->fair_price_dinner }}円</p>
            </div>
            @endforeach
        </div>

    </div>

    <!-- レストラン情報 -->

    <div class="restaurant__container">

        <div class="restaurant__title-container">
            <span class="restaurant__sub-title">restaurant</span>
            <h2 class="restaurant__title">レストラン情報</h2>
        </div>

        <div class="restaurant__grid-container">
            @foreach ($restaurant_info as $restaurant_info)
            <div class="restaurant__grid-item">
                <img class="restaurant__img" src="{{ asset('images/'.$restaurant_info->restaurant_image) }}" alt="レストラン画像">
                <h3 class="restaurant__name">{{ $restaurant_info->restaurant_name }}</h3>
                <p class="restaurant__description">{{ $restaurant_info->restaurant_description }}</p>
                <p class="restaurant__event_date">【営業時間】{{ $restaurant_info->restaurant_open_time }} 〜 {{ $restaurant_info->restaurant_close_time }}</p>
                <p class="restaurant__price">【料金】{{ $restaurant_info->restaurant_price }}円</p>
                <button type="submit">予約をする</button>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection