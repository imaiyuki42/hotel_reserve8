<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            [
                'plan_name' => 'プレミアムスイートプラン',
                'plan_catch_copy' => '豪華な客室と絶景を満喫する、至福のステイケーションプラン。贅沢な時間を過ごすなら、このプランがおすすめ！',
                'plan_description' => '最上階に位置する豪華なスイートルームに宿泊し、スパやレストランなどの施設を無料で利用できるプランです。チェックイン前後のラウンジサービスも受けられます。',
                'plan_price' => '50000',
                'plan_image' => 'room_1.jpg',
                'checkin_time' => '15:00',
                'checkout_time' => '10:00',
                'meal' => '1',
                'recommended_flag' => '1',
                'created_at' => Now(),
            ],
            [
                'plan_name' => 'ロイヤルスイートプラン',
                'plan_catch_copy' => '贅沢な滞在に相応しい、スタイリッシュな高級プラン。究極の快適さと、最高のサービスで、最高峰のラグジュアリーを体感してください。',
                'plan_description' => 'ホテルの最高級スイートルームに宿泊し、VIP待遇で贅沢な滞在を楽しめます。プライベートチェックインやプール＆スパのプライベート利用など、特別なサービスが受けられます。',
                'plan_price' => '55000',
                'plan_image' => 'plan_1.jpg',
                'checkin_time' => '16:00',
                'checkout_time' => '11:00',
                'meal' => '2',
                'recommended_flag' => '0',
                'created_at' => Now(),
            ],
            [
                'plan_name' => 'ディナー＆ショーイベントプラン',
                'plan_catch_copy' => '魅惑のショーとグルメの共演。贅沢なひとときを演出する、ディナー＆ショーイベントプラン。至福の味わいと、非日常的な興奮をご提供いたします。',
                'plan_description' => '地元の芸術家によるライブショーを楽しみながら、レストランでの特別なディナーを堪能できるプランです。豪華なメニューと生演奏のコラボレーションをお楽しみください。',
                'plan_price' => '15000',
                'plan_image' => 'top_5.jpg',
                'checkin_time' => '17:00',
                'checkout_time' => '10:00',
                'meal' => '3',
                'recommended_flag' => '1',
                'created_at' => Now(),
            ],
            [
                'plan_name' => 'ファミリープラン',
                'plan_catch_copy' => '家族みんなで楽しめる、ファミリープラン。広々とした客室や設備、アクティビティなど、家族旅行に必要なものが揃っています。子どもたちも大喜び間違いなし！',
                'plan_description' => '家族での滞在に最適なプランで、子供たちに人気の施設やアクティビティを含みます。ファミリールームやスイートルームを利用できる場合があり、朝食も家族向けに充実した内容となっています。',
                'plan_price' => '10000',
                'plan_image' => 'plan_1.jpg',
                'checkin_time' => '15:00',
                'checkout_time' => '11:00',
                'meal' => '3',
                'recommended_flag' => '1',
                'created_at' => Now(),
            ],
            [
                'plan_name' => 'ウエディングプラン',
                'plan_catch_copy' => '大切な人との特別な時間を、ロマンチックな空間で過ごす、ラブリームーンプラン。花やろうそくで彩られた客室で、至福のひとときを過ごしましょう。',
                'plan_description' => 'ホテルでの結婚式やウエディングパーティーを行うためのプランです。会場や装花、音響など、すべての準備をプロのスタッフがサポートします。新郎新婦には、スイートルームやスパ、レストラン利用券なども用意される場合があります。',
                'plan_price' => '20000',
                'plan_image' => 'plan_1.jpg',
                'checkin_time' => '15:00',
                'checkout_time' => '10:00',
                'meal' => '0',
                'recommended_flag' => '0',
                'created_at' => Now(),
            ],
            [
                'plan_name' => 'プライベートビーチプラン',
                'plan_catch_copy' => 'ビーチリゾートの開放感と、リゾートホテルならではの上質なサービスが融合する、ビーチプラン。海辺でのんびり過ごしたい方におすすめです。',
                'plan_description' => 'ホテル専用のビーチやプールを利用できるプランです。特別なビーチチェアーやタオル、ビーチボールやサンドイッチなども提供され、快適なリゾートステイをお楽しみいただけます。',
                'plan_price' => '35000',
                'plan_image' => 'plan_1.jpg',
                'checkin_time' => '16:00',
                'checkout_time' => '11:00',
                'meal' => '2',
                'recommended_flag' => '0',
                'created_at' => Now(),
            ],
        ]);
    }
}
