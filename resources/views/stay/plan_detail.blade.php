@extends('layouts.app')

@section('content')

<!-- プラン詳細画面 -->
<div class="plan-detail__wrapper">

    <!-- プラン詳細のヘッダー -->
    <div class="plan-detail__header">
        <h1 class="plan-detail__name">{{ $hotel_plan->plan_name }}</h1>
    </div>

    <!-- プラン詳細 -->
    <div class="plan-detail__container">
        <img class="plan-detail__img" src="{{ asset('images/'.$hotel_plan->plan_image) }}" alt="aaa">

        <p class="plan-detail__description">{{ $hotel_plan->plan_description }}</p>

        <div class="plan-detail__item">

            <div class="plan-detail__sub-item">
                <p class="plan-detail__price">【料金】{{ number_format($hotel_plan->plan_price) }}円</p>

                @if ($hotel_plan->meal == 0)
                <p class="plan-detail__meal">【食事】なし（素泊まり）</p>
                @elseif ($hotel_plan->meal == 1)
                <p class="plan-detail__meal">【食事】朝食付き</p>
                @elseif ($hotel_plan->meal == 2)
                <p class="plan-detail__meal">【食事】夕食付き</p>
                @else
                <p class="plan-detail__meal">【食事】朝食・夕食付き</p>
                @endif

                <p class="plan-detail__checkin-time">【チェックイン時間】{{ $hotel_plan->checkin_time }}〜</p>
                <p class="plan-detail__checkout-time">【チェックアウト時間】{{ $hotel_plan->checkout_time }}〜</p>
            </div>

            <div class="plan-detail__reserve-button-container">
                <a href="{{ route('stay.plan.search', $hotel_plan->plan_id) }}" class="reserve-button">予約をする</a>
            </div>
        </div>
    </div>
</div>

@endsection