<h1>プラン検索</h1>

<div class="hotel-plan-search__wrapper">
    <div class="hotel-plan-search__detail-container">
        <h2>プラン詳細</h2>
        <h3>{{ $hotel_plan->plan_name}}</h3>
        <h4>プラン期間：{{ $plan_start_date }} 〜 {{ $plan_end_date }}</h4>
        <p>{{ $hotel_plan->plan_description }}</p>
        <img class="plan-detail__img" src="{{ asset('images/'.$hotel_plan->plan_image) }}" alt="aaa">
        <p class="plan-detail__checkin-time">【チェックイン時間】{{ $hotel_plan->checkin_time }}〜</p>
        <p class="plan-detail__checkout-time">【チェックアウト時間】{{ $hotel_plan->checkout_time }}〜</p>
        <p>【食事】{{ $plan_meal }}</p>
    </div>

    <div class="hotel-plan-search__search-form">
        <form action="{{ route('stay.plan.result') }}" method="post">
            @csrf
            <div class="date-picker" id="hotel-reservation-search__checkin-container">
                <h3 class="hotel-reservation-search__checkin-title">チェックイン日</h3>
                <input type="text" id="checkin_datepicker" name="checkin_date">
            </div>

            <div class="date-picker" id="hotel-reservation-search__checkout-container">
                <h3 class="hotel-reservation-search__checkout-title">チェックアウト日</h3>
                <input type="text" id="checkout_datepicker" name="checkout_date">
            </div>

            <div class="hotel-reservation-search__user-count-container">
                <h3 class="hotel-reservation-search__user-count-title">1部屋のご利用人数</h3>
                <select name="number_of_guests" class="hotel-reservation-search__user-count-select">
                    <option value="1">大人1名</option>
                    <option value="2">大人2名</option>
                    <option value="3">大人3名</option>
                    <option value="4">大人4名</option>
                </select>
            </div>

            <div class="">
                <h3>部屋のタイプ</h3>
                <select name="bed_type" id="">
                    <option value="シングル">シングル</option>
                    <option value="ツイン">ツイン</option>
                    <option value="ダブル">ダブル</option>
                    <option value="トリプル">トリプル</option>
                    <option value="クアッド">クアッド</option>
                </select>
            </div>

            <div class="">
                <label>
                    <input type="radio" name="smoking" value="0" checked>
                    禁煙
                </label>
                <label>
                    <input type="radio" name="smoking" value="1">
                    喫煙
                </label>
            </div>

            <button type="submit">検索する</button>
        </form>
    </div>
</div>