@extends('layouts.app')

@section('content')

<!-- おすすめプラン -->
<div class="stay-recommended-plan__wrapper">

    <!-- おすすめプラン-title -->
    <div class="stay-recommended-plan__title-container">
        <span class="stay-recommended-plan__sub-title">Recommended Plan</span>
        <h2 class="stay-recommended-plan__title">おすすめプラン</h2>
    </div>

    <!-- おすすめプラン-item -->
    <div class="stay-recommended-plan__grid-container">
        @foreach ($recommend_plans as $recommend_plan)
        <div class="stay-recommended-plan__grid-item">
            <img class="stay-recommended-plan__img" src="{{ asset('images/'.$recommend_plan->plan_image) }}" alt="プラン画像">
            <h3 class="stay-recommended-plan__name">{{ $recommend_plan->plan_name }}</h3>
            <p class="stay-recommended-plan__description">{{ $recommend_plan->plan_catch_copy }}</p>
        </div>
        @endforeach
    </div>
</div>

<!-- プラン一覧 -->
<div class="stay-plan__wrapper">
    <!-- プラン一覧-title -->
    <div class="stay-plan__title-container">
        <span class="stay-plan__sub-title">Plan</span>
        <h2 class="stay-plan__title">プラン一覧</h2>
    </div>
    <!-- プラン一覧-item -->
    <div class="stay-plan__grid-container">
        @foreach ($plans as $plan)
        <div class="stay-plan__grid-item">
            <img class="stay-plan__img" src="{{ asset('images/'.$plan->plan_image) }}" alt="aaa">
            <h3 class="stay-plan__name">{{ $plan->plan_name }}</h3>
            <p class="stay-plan__description">{{ $plan->plan_catch_copy }}</p>
            <button class="stay-plan__detail-button" type="submit">詳細を見る</button>
            <button class="stay-plan__reserve-button" type="submit">予約をする</button>
        </div>
        @endforeach
    </div>
</div>

<!-- 検索 -->
<div class="stay-search">
    <form action="{{ route('stay.search') }}" method="post">
        @csrf
        <div class="date-picker" id="stay-search-checkin__container">
            <h3 class="stay-search-checkin__title">チェックイン日</h3>
            <input type="text" id="checkin_datepicker" name="checkin_date">
        </div>

        <div class="date-picker" id="stay-search-checkout__container">
            <h3 class="stay-search-checkout__title">チェックアウト日</h3>
            <input type="text" id="checkout_datepicker" name="checkout_date">
        </div>

        <div class="stay-search-reserve-info">
            <div class="stay-search-user-count__container">
                <h3 class="stay-search-user-count__title">1部屋のご利用人数</h3>
                <select name="number_of_guests" class="stay-search-user-count__select">
                    <option value="1">大人1名</option>
                    <option value="2">大人2名</option>
                    <option value="3">大人3名</option>
                    <option value="4">大人4名</option>
                </select>
            </div>

            <div class="stay-search-room-count__container">
                <h3 class="stay-search-room-count__title">ご利用部屋数</h3>
                <select name="room_use_number" class="stay-search-room-count__select">
                    <option value="1">1部屋</option>
                    <option value="2">2部屋</option>
                    <option value="3">3部屋</option>
                    <option value="4">4部屋</option>
                </select>
            </div>
        </div>
        <div class="stay-search-search-button__container">
            <button class="stay-search-search-button" type="submit">検索する</button>
        </div>
</div>


@endsection