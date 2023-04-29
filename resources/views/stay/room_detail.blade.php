@extends('layouts.app')

@section('content')

<!-- 客室詳細 -->
<div class="room-detail__wrapper">
    <img class="room-detail__img" src="{{ asset('images/'.$room_info->room_image) }}" alt="aaa">
    <div class="room-detail__header">
        <h1 class="room-detail__name">{{ $room_info->room_name }}</h1>
    </div>

    <div class="room-detail__basic-info">
        <h2 class="room-detail__basic-info-title">基本情報</h2>
        <table class="room-detail__basic-info-table">
            <tr class="room-detail__basic-info-tr">
                <th class="room-detail__basic-info-th">ベッド数</th>
                <td class="room-detail__basic-info-td">{{ $room_info->bed_count }}台</td>
            </tr>
            <tr class="room-detail__basic-info-tr">
                <th class="room-detail__basic-info-th">最大収容人数</th>
                <td class="room-detail__basic-info-td">{{ $room_info->max_capacity }}人</td>
            </tr>
            <tr class="room-detail__basic-info-tr">
                <th class="room-detail__basic-info-th">ベッドの種類</th>
                <td class="room-detail__basic-info-td">{{ $room_info->bed_type }}</td>
            </tr>
        </table>
    </div>

    <div class="room_detail__equipment-item">
        <div class="room_detail__equipment-container">
            <h2 class="room_detail__equipment-title">客室設備</h2>
            @foreach ($equipments as $equipment)
            <ul class="room_detail__equipment-ul">
                <li class="room_detail__equipment-li">{{ $equipment->equipment_name }}</li>
            </ul>
            @endforeach
        </div>

        <div class="room_detail__amenity-container">
            <h2 class="room_detail__amenity-title">アメニティ</h2>
            @foreach ($amenities as $amenity)
            <ul class="room_detail__amenity-ul">
                <li class="room_detail__amenity-li">{{ $amenity->amenity_name }}</li>
            </ul>
            @endforeach
        </div>
    </div>

    <div class="room-detail__reserve-button-container">
        <a href="" class="room-detail__reserve-button">予約をする</a>
    </div>
</div>



@endsection