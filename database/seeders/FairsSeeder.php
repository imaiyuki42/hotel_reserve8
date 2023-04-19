<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FairsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fairs')->insert([
            [
                'restaurant_id' => '1',
                'fair_name' => 'ビュッフェ＆スイーツ・フェア',
                'fair_start_date' => '2023-05-01',
                'fair_end_date' => '2023-05-30',
                'fair_price_lunch' => '3000',
                'fair_price_dinner' => '4500',
                'fair_description' => '人気のビュッフェと、豪華なスイーツがセットになったフェアです。種類豊富な料理を堪能し、自分好みのデザートを選んで楽しめます。',
                'fair_image' => 'fair_1.jpg',
                'recommended_flag' => '1',
                'created_at' => Now(),
            ],
            [
                'restaurant_id' => '2',
                'fair_name' => 'ティータイム・フェア',
                'fair_start_date' => '2023-05-15',
                'fair_end_date' => '2023-05-30',
                'fair_price_lunch' => '2000',
                'fair_price_dinner' => '2500',
                'fair_description' => 'ゴージャスな空間で、上質な紅茶とともにスイーツを楽しめるフェア。ハイティーとともに、特別なひとときを過ごしましょう。',
                'fair_image' => 'fair_1.jpg',
                'recommended_flag' => '1',
                'created_at' => Now(),
            ],
            [
                'restaurant_id' => '3',
                'fair_name' => 'ステーキ・フェア',
                'fair_start_date' => '2023-06-01',
                'fair_end_date' => '2023-06-30',
                'fair_price_lunch' => '5000',
                'fair_price_dinner' => '8000',
                'fair_description' => '肉好きにはたまらない、絶品ステーキを提供するフェア。良質なお肉を使用したステーキは、柔らかくジューシーで、食欲をそそります。',
                'fair_image' => 'fair_1.jpg',
                'recommended_flag' => '0',
                'created_at' => Now(),
            ],
            [
                'restaurant_id' => '4',
                'fair_name' => 'ワイン＆チーズ・フェア',
                'fair_start_date' => '2023-05-12',
                'fair_end_date' => '2023-05-22',
                'fair_price_lunch' => '8000',
                'fair_price_dinner' => '12000',
                'fair_description' => '高級ホテルならではの、厳選されたワインとチーズが楽しめるフェア。専門のソムリエが選ぶ、マッチングが絶妙なワインとチーズを味わいましょう。',
                'fair_image' => 'fair_1.jpg',
                'recommended_flag' => '1',
                'created_at' => Now(),
            ],
            [
                'restaurant_id' => '5',
                'fair_name' => 'トリュフ・フェア',
                'fair_start_date' => '2023-06-01',
                'fair_end_date' => '2023-06-30',
                'fair_price_lunch' => '10000',
                'fair_price_dinner' => '15000',
                'fair_description' => '世界的に有名な高級食材、トリュフを使った特別なフェア。トリュフを使ったパスタや、肉料理など、贅沢な味わいを堪能できます',
                'fair_image' => 'fair_1.jpg',
                'recommended_flag' => '0',
                'created_at' => Now(),
            ],
            [
                'restaurant_id' => '6',
                'fair_name' => 'アフタヌーンティー・フェア',
                'fair_start_date' => '2023-05-01',
                'fair_end_date' => '2023-05-18',
                'fair_price_lunch' => '3000',
                'fair_price_dinner' => '3500',
                'fair_description' => '伝統的なアフタヌーンティーが楽しめるフェア。英国式のティーセットとともに、サンドイッチやスコーン、スイーツなどがセットになっています。',
                'fair_image' => 'fair_1.jpg',
                'recommended_flag' => '0',
                'created_at' => Now(),
            ],
        ]);
    }
}
