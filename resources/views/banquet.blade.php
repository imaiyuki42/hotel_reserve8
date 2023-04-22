@extends('layouts.app')

@section('content')

<!-- banquet -->
<div class="banquet-wrapper">

    <!-- main-title -->
    <h1 class="banquet-title">会議＆宴会</h1>
    <div class="banquet-main__img-container">
        <img class="banquet-main__img" src="{{ asset('images/banquet_1.jpg') }}" alt="レストラントップ画像">
    </div>

    <div class="banquet__title-container">
        <span class="banquet__sub-title">Banquet</span>
        <h2 class="banquet__title">宴会場のご案内</h2>
    </div>

    <div class="banquet__grid-container">
        @foreach ($banquet_info as $banquet_info)
        <div class="banquet__grid-item">
            <img class="banquet__img" src="{{ asset('images/'.$banquet_info->banquet_image) }}" alt="プラン画像">
            <h3 class="banquet__name">{{ $banquet_info->hall_name }}</h3>
            <p class="banquet__catch-copy">{{ $banquet_info->banquet_catch_copy }}</p>
        </div>
        @endforeach
    </div>

    <h2 class="banquet-use-count__title">宴会場利用人数</h2>

    <table class="banquet-table">
        <tr class="banquet-tr__th">
            <th class="banquet-th">宴会場名</th>
            <th class="banquet-th">面積㎡(坪)</th>
            <th class="banquet-th">スタンディングスタイル</th>
            <th class="banquet-th">ディナースタイル</th>
            <th class="banquet-th">ビュッフェスタイル</th>
            <th class="banquet-th">シアタースタイル</th>
        </tr>

        @foreach ($banquet as $banquet)
        <tr class="banquet-tr__td">
            <td class="banquet-td">{{ $banquet->hall_name }}</td>
            <td class="banquet-td">{{ $banquet->hall_area . '('. $banquet->tsubo_area .')' }}</td>
            <td class="banquet-td">{{ $banquet->standing_style_fit_count }}名</td>
            <td class="banquet-td">{{ $banquet->dinner_style_fit_count }}名</td>
            <td class="banquet-td">{{ $banquet->buffet_style_fit_count }}名</td>
            <td class="banquet-td">{{ $banquet->theater_style_fit_count }}名</td>
        </tr>

        @endforeach

    </table>

</div>

@component('components.hotel_reservation_search')

@endcomponent

@endsection