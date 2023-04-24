<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
            [
                'facility_name' => 'インフィニティプール',
                'facility_catch_copy' => '海を一望するインフィニティプールで、究極のリゾート体験を。',
                'facility_description' => '周囲がオーシャンビューになっており、水面と海が一体となっている印象的なプールです。水面が地平線と一体化しているため、絶景を楽しみながら泳ぐことができます。',
                'facility_image' => 'pool_1.jpg',
                'created_at' => Now(),
            ],
            [
                'facility_name' => 'トロピカルスパ',
                'facility_catch_copy' => '心と体が満たされる、極上のスパ体験を。',
                'facility_description' => '熱帯の雰囲気を感じさせるスパで、マッサージやハーブティメントメント、フェイシャルトリートメントなどを提供しています。',
                'facility_image' => 'spa_1.jpg',
                'created_at' => Now(),
            ],
            [
                'facility_name' => 'フォトスタジオ',
                'facility_catch_copy' => '思い出に残る一枚を、プロの技で。',
                'facility_description' => 'ホテルフォトスタジオでは、美しいロケーションでの撮影をお楽しみいただけます。プロのカメラマンが、あなたの魅力を最大限に引き出すポージング指導を行います。ウェディングフォトや前撮り、ファミリー写真など、どんなテーマにも対応できます。',
                'facility_image' => 'photo_studio_1.jpg',
                'created_at' => Now(),
            ],
            [
                'facility_name' => '駐車場',
                'facility_catch_copy' => '駐車場も安心、快適。ホテルでの滞在をより一層楽しめる、心地よい駐車場をご用意しております。',
                'facility_description' => 'ホテル駐車場は、24時間ご利用いただけます。屋内駐車場も完備しており、雨や雪の日でも快適に車をお預けいただけます。また、ホテルに宿泊されるお客様は、駐車場を1日1回無料でご利用いただけます。詳細はフロントにお問い合わせください。',
                'facility_image' => 'pool_1.jpg',
                'created_at' => Now(),
            ],
        ]);
    }
}
