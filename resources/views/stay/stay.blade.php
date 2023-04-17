@extends('layouts.app')

@section('content')
<h1>宿泊プラン</h1>

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
        <select name="number_of_guests" id="">
            <option value="1">大人1名</option>
            <option value="2">大人2名</option>
            <option value="3">大人3名</option>
            <option value="4">大人4名</option>
        </select>

        <h3>ご利用部屋数</h3>
        <select name="room_use_number" id="">
            <option value="1">1部屋</option>
            <option value="2">2部屋</option>
            <option value="3">3部屋</option>
            <option value="4">4部屋</option>
        </select>

        <button type="submit">検索する</button>
    </form>

</div>

<h2>おすすめプラン</h2>

@foreach ($recommend_plans as $recommend_plan)
<h3>{{ $recommend_plan->plan_name }}</h3>
<p>{{ $recommend_plan->plan_description }}</p>
<p>料金：{{ $recommend_plan->plan_price }}円</p>

@if ($recommend_plan->meal == 0)
<p>食事：なし（素泊まり）</p>
@elseif ($recommend_plan->meal == 1)
<p>食事：朝食付き</p>
@elseif ($recommend_plan->meal == 2)
<p>食事：夕食付き</p>
@else
<p>食事：朝食・夕食付き</p>

@endif

<p>チェックイン時間：{{ $recommend_plan->checkin_time }}</p>
<p>チェックアウト時間：{{ $recommend_plan->checkout_time }}</p>
<img src="{{ asset('images/'.$recommend_plan->plan_image) }}" alt="aaa">

<button type="submit">予約をする</button>

@endforeach


@endsection