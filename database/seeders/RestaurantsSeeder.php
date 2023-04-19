<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'restaurant_name' => 'ガストロノミック・ブランシェット',
                'restaurant_description' => 'フランス料理をベースに、地元の食材や調味料を取り入れたコース料理を提供する、高級フレンチレストラン。',
                'restaurant_price' => '15000',
                'restaurant_image' => 'restaurant_1.jpg',
                'restaurant_phone_number' => '03-1223-4456',
                'restaurant_open_time' => '11:00',
                'restaurant_close_time' => '21:00',
                'created_at' => Now(),
            ],
            [
                'restaurant_name' => 'ニューヨーク・ステーキハウス',
                'restaurant_description' => 'アメリカンステーキを中心とした肉料理が自慢のレストラン。ステーキの種類や調理法、部位など豊富なバリエーションがある。',
                'restaurant_price' => '10000',
                'restaurant_image' => 'restaurant_1.jpg',
                'restaurant_phone_number' => '03-5656-3556',
                'restaurant_open_time' => '11:00',
                'restaurant_close_time' => '20:00',
                'created_at' => Now(),
            ],
            [
                'restaurant_name' => 'ザ・シーフード・バー',
                'restaurant_description' => '海鮮料理専門のレストラン。新鮮な魚介類を豊富に取り揃え、シェフの技術で調理された料理を提供する。',
                'restaurant_price' => '8000',
                'restaurant_image' => 'restaurant_1.jpg',
                'restaurant_phone_number' => '03-3323-3056',
                'restaurant_open_time' => '11:00',
                'restaurant_close_time' => '24:00',
                'created_at' => Now(),
            ],
            [
                'restaurant_name' => 'マルタ・ダイニングルーム',
                'restaurant_description' => '地中海料理をベースにした料理を提供する、高級ダイニングレストラン。旬の食材を使用し、季節感を表現したコース料理が人気。',
                'restaurant_price' => '8000',
                'restaurant_image' => 'restaurant_1.jpg',
                'restaurant_phone_number' => '03-1987-4434',
                'restaurant_open_time' => '09:00',
                'restaurant_close_time' => '14:00',
                'created_at' => Now(),
            ],
            [
                'restaurant_name' => 'Marea',
                'restaurant_description' => 'イタリアンシーフードを提供する高級レストラン。新鮮な魚介類を使ったパスタやリゾットがおすすめ。',
                'restaurant_price' => '11000',
                'restaurant_image' => 'restaurant_1.jpg',
                'restaurant_phone_number' => '03-1769-4372',
                'restaurant_open_time' => '10:00',
                'restaurant_close_time' => '20:00',
                'created_at' => Now(),
            ],
            [
                'restaurant_name' => 'Sushi Saito',
                'restaurant_description' => '東京・銀座に本店を構える、世界的に有名な寿司店。ミシュラン三つ星を獲得した寿司職人の技が堪能できる。',
                'restaurant_price' => '18000',
                'restaurant_image' => 'restaurant_1.jpg',
                'restaurant_phone_number' => '03-7493-4827',
                'restaurant_open_time' => '17:00',
                'restaurant_close_time' => '21:00',
                'created_at' => Now(),
            ],
        ]);
    }
}
