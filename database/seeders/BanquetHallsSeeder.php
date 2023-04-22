<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanquetHallsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banquet_halls')->insert([
            [
                'hall_name' => 'グランドボールルーム ',
                'hall_area' => '1100',
                'tsubo_area' => '300',
                'standing_style_fit_count' => '1200',
                'dinner_style_fit_count' => '1000',
                'buffet_style_fit_count' => '800',
                'theater_style_fit_count' => '1500',
                'banquet_catch_copy' => '特別な日をより華やかに演出する、贅沢な空間でのパーティーをお約束します。',
                'banquet_description' => '多彩な宴会場をご用意しております。結婚式やパーティー、会議や展示会など、様々なイベントに対応できます。最新の音響設備や照明、プロジェクターなどを完備しており、お客様のニーズに合わせて柔軟に対応いたします。',
                'banquet_image' => 'banquet_1.jpg',
                'created_at' => Now(),
            ],
            [
                'hall_name' => 'ガーデンテラス ',
                'hall_area' => '700',
                'tsubo_area' => '200',
                'standing_style_fit_count' => '600',
                'dinner_style_fit_count' => '400',
                'buffet_style_fit_count' => '350',
                'theater_style_fit_count' => '900',
                'banquet_catch_copy' => '心地よい光が差し込む開放的な空間で、アットホームなパーティーをお楽しみください。',
                'banquet_description' => '自然光が差し込む開放的な空間で、上質なひとときを。都会の喧騒を忘れさせる、開放的な宴会場をご用意しております。最新の音響設備と、厳選された食材を使用した料理で、お客様に満足していただける上質なひとときをお過ごしください。',
                'banquet_image' => 'banquet_1.jpg',
                'created_at' => Now(),
            ],
            [
                'hall_name' => 'シャンデリアホール ',
                'hall_area' => '200',
                'tsubo_area' => '70',
                'standing_style_fit_count' => '150',
                'dinner_style_fit_count' => '120',
                'buffet_style_fit_count' => '100',
                'theater_style_fit_count' => '270',
                'banquet_catch_copy' => 'エレガントな雰囲気が漂う宴会場で、特別なひとときをお過ごしください。',
                'banquet_description' => '充実の設備と厳選された料理で、心に残る宴会を。洗練された内装と最新の音響設備を備えた宴会場で、美味しい料理と共に楽しいひとときをお過ごしください。',
                'banquet_image' => 'banquet_1.jpg',
                'created_at' => Now(),
            ],
            [
                'hall_name' => 'ロイヤルルーム ',
                'hall_area' => '200',
                'tsubo_area' => '70',
                'standing_style_fit_count' => '150',
                'dinner_style_fit_count' => '120',
                'buffet_style_fit_count' => '100',
                'theater_style_fit_count' => '270',
                'banquet_catch_copy' => 'エレガントな雰囲気が漂う宴会場で、特別なひとときをお過ごしください。',
                'banquet_description' => 'ホテルならではのスペシャルな宴会を。シックな雰囲気のプライベート空間から、広々とした大宴会場まで、お客様のご要望に合わせた様々なスタイルをご用意しております。',
                'banquet_image' => 'banquet_1.jpg',
                'created_at' => Now(),
            ],
            [
                'hall_name' => 'クリスタルルーム ',
                'hall_area' => '50',
                'tsubo_area' => '15',
                'standing_style_fit_count' => '25',
                'dinner_style_fit_count' => '20',
                'buffet_style_fit_count' => '20',
                'theater_style_fit_count' => '40',
                'banquet_catch_copy' => '最新の音響設備と豪華なインテリアが融合した、魅力的な宴会場をご用意しております。',
                'banquet_description' => '思い出に残る特別なひとときを。ウェディングやバースデーパーティー、各種イベントなど、大切な記念日をより一層華やかに彩る宴会場をご用意しております。専属のプランナーが、お客様のご要望に合わせたオリジナルプランをご提案いたします。',
                'banquet_image' => 'banquet_1.jpg',
                'created_at' => Now(),
            ],
        ]);
    }
}
