@extends('layouts.app')

@section('content')
<h1>宴会場のご案内</h1>

@foreach ($banquet_info as $banquet_info)
<img class="banquet__img" src="{{ asset('images/'.$banquet_info->banquet_image) }}" alt="プラン画像">
<h3 class="banquet__name">{{ $banquet_info->hall_name }}</h3>

@endforeach

<h2>宴会場利用人数</h2>

<table>
    <tr>
        <th>宴会場名</th>
        <th>面積㎡(坪)</th>
        <th>スタンディングスタイル</th>
        <th>ディナースタイル</th>
        <th>ビュッフェスタイル</th>
        <th>シアタースタイル</th>
    </tr>

    @foreach ($banquet as $banquet)
    <tr>
        <td>{{ $banquet->hall_name }}</td>
        <td>{{ $banquet->hall_area . '('. $banquet->tsubo_area .')' }}</td>
        <td>{{ $banquet->standing_style_fit_count }}名</td>
        <td>{{ $banquet->dinner_style_fit_count }}名</td>
        <td>{{ $banquet->buffet_style_fit_count }}名</td>
        <td>{{ $banquet->theater_style_fit_count }}名</td>
    </tr>

    @endforeach

</table>

@component('components.hotel_reservation_search')

@endcomponent

@endsection