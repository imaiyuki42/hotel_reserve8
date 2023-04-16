@extends('layouts.app')

@section('content')
<h1>検索結果</h1>

<p>検索結果：{{ $available_rooms_count }}件</p>

@foreach ($available_rooms as $available_room)

<img src="{{ asset('images/'.$available_room->image) }}" alt="ルーム１">

<p>{{ $available_room->room_description }}</p>

<h3>部屋情報</h3>

@if ($available_room->smoking == 0)
<p>【禁煙】</p>
@else
<p>【喫煙】</p>
@endif

<p>{{ $available_room->bed_type }}</p>

<p>合計金額：{{ $available_room->price }}円</p>

<button type="submit">予約する</button>

@endforeach

@endsection