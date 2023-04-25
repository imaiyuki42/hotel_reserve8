<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Reservation;
use App\Models\Plan;
use Carbon\Carbon;

class StayController extends Controller
{
    /**トップ画面を表示 */
    public function index()
    {
        //おすすめのプランの情報を取得する
        $recommend_plans = Plan::where('recommended_flag', '=', '1')
            ->get();

        //通常プランの情報を取得する
        $plans = Plan::all();

        return view('stay.stay', compact('recommend_plans', 'plans'));
    }

    /**宿泊の検索機能
     *検索範囲を設定する(チェックイン日からチェックアウトの前日までで空席の部屋を表示する)
     */
    public function search(Request $request)
    {
        //フォームから受け取ったデータを変数に格納
        $checkin_date = Carbon::createFromFormat('Y/m/d', $request->input('checkin_date'))->format('Y-m-d');
        $checkout_date = Carbon::createFromFormat('Y/m/d', $request->input('checkout_date'))->format('Y-m-d');
        $number_of_guests = $request->input('number_of_guests');
        $room_use_number = $request->input('room_use_number');

        //チェックアウト日の前日を計算する
        $checkout_previous_day = Carbon::parse($checkout_date)->subDay()->format('Y-m-d');

        //検索結果を表示するデータを取得する
        $available_rooms_info = $this->availableRoomInfo($checkin_date, $checkout_previous_day, $number_of_guests, $room_use_number);

        $available_rooms_count = $available_rooms_info['available_rooms_count'];
        $available_rooms = $available_rooms_info['available_rooms'];

        return view('stay.result', compact('available_rooms_count', 'available_rooms'));
    }

    /**各プランの詳細画面を表示 */
    public function show($plan_id)
    {
        //該当プランのデータを取得する
        $hotel_plan = Plan::find($plan_id);

        return view('stay.plan_detail', compact('hotel_plan'));
    }

    /**プラン詳細ページからプランの検索画面を表示する */
    public function planSearch($plan_id)
    {
        //該当プランのデータを取得する
        $hotel_plan = Plan::find($plan_id);

        //プラン開始日をY年m月d日形式に変換
        $plan_start_date = Carbon::parse($hotel_plan->plan_start_date)->format('Y年m月d日');

        //プラン終了日をY年m月d日形式に変換
        $plan_end_date = Carbon::parse($hotel_plan->plan_end_date)->format('Y年m月d日');

        //食事の種類を判定する
        if ($hotel_plan->meal == 0) {
            $plan_meal = 'なし（素泊まり）';
        } elseif ($hotel_plan->meal == 1) {
            $plan_meal = '朝食付き';
        } elseif ($hotel_plan->meal == 2) {
            $plan_meal = '夕食付き';
        } else {
            $plan_meal = '朝食・夕食付き';
        }


        return view('stay.plan_search', compact('hotel_plan', 'plan_start_date', 'plan_end_date', 'plan_meal'));
    }

    public function planResult()
    {

        return view('stay.plan_result');
    }

    /**検索条件にヒットしたデータを取得する */
    private function availableRoomInfo($checkin_date, $checkout_previous_day, $number_of_guests, $room_use_number)
    {

        //予約済みの部屋のIDを取得(チェックイン日が検索条件のチェックアウト日より前かつ、チェックアウト日が検索条件のチェックアウト日より後のレコードを取得する。)
        $reserved_rooms = Reservation::where('checkin_date', '<=', $checkout_previous_day)
            ->where('checkout_date', '>=', $checkin_date)
            ->pluck('room_id')
            ->toArray();

        //予約可能な部屋の中で検索条件の予約人数よりキャパシティが大きい部屋の数をカウントする。
        $available_rooms_count = Room::whereNotIn('room_id', $reserved_rooms)
            ->where('max_capacity', '>=', $number_of_guests)
            ->count();

        //予約可能な部屋の数が検索した予約部屋数より多い場合は検索件数と予約可能な部屋の情報を取得する。
        if ($available_rooms_count >=  $room_use_number) {

            $available_rooms = Room::whereNotIn('room_id', $reserved_rooms)
                ->where('max_capacity', '>=', $number_of_guests)
                ->get();

            $available_rooms_info = [
                'available_rooms_count' => $available_rooms_count,
                'available_rooms' => $available_rooms
            ];

            return $available_rooms_info;
        } else {

            return view('stay.nothing');
        }
    }
}
