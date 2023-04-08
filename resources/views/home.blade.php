@extends('layouts.app')

@section('content')

<h1>トップ画面</h1>

<h2>{{ Auth::user()->name }}さんの予約状況</h2>



<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>ログアウト</button>
</form>

@endsection