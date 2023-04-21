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

@component('components.hotel_reservation_search')

@endcomponent

<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>ログアウト</button>
</form>
</div>

@endsection