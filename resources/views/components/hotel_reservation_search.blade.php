<!-- 予約検索 -->
<div class="hotel-reservation-search__wrapper">
    <form action="{{ route('stay.search') }}" method="post">
        @csrf
        <div class="date-picker" id="hotel-reservation-search__checkin-container">
            <h3 class="hotel-reservation-search__checkin-title">チェックイン日</h3>
            <input type="text" id="checkin_datepicker" name="checkin_date">
        </div>

        <div class="date-picker" id="hotel-reservation-search__checkout-container">
            <h3 class="hotel-reservation-search__checkout-title">チェックアウト日</h3>
            <input type="text" id="checkout_datepicker" name="checkout_date">
        </div>

        <div class="hotel-reservation-search__reserve-info">
            <div class="hotel-reservation-search__user-count-container">
                <h3 class="hotel-reservation-search__user-count-title">1部屋のご利用人数</h3>
                <select name="number_of_guests" class="hotel-reservation-search__user-count-select">
                    <option value="1">大人1名</option>
                    <option value="2">大人2名</option>
                    <option value="3">大人3名</option>
                    <option value="4">大人4名</option>
                </select>
            </div>

            <div class="hotel-reservation-search__room-count-container">
                <h3 class="hotel-reservation-search__room-count-title">ご利用部屋数</h3>
                <select name="room_use_number" class="hotel-reservation-search__room-count-select">
                    <option value="1">1部屋</option>
                    <option value="2">2部屋</option>
                    <option value="3">3部屋</option>
                    <option value="4">4部屋</option>
                </select>
            </div>
        </div>

        <div class="hotel-reservation-search__search-button-container">
            <button class="hotel-reservation-search__search-button" type="submit">検索する</button>
        </div>
    </form>