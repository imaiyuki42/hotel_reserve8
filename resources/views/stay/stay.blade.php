@extends('layouts.app')

@section('content')

<!-- stay -->
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

@component('components.hotel_reservation_search')

@endcomponent


@endsection