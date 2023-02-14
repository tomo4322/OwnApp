<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefectures = [
            [
                "name" =>  "北海道",
                "region_id" =>  1,
            ],
            [
                "name" =>  "青森県",
                "region_id" =>  1,
            ],
            [
                "name" =>  "岩手県",
                "region_id" =>  1,
            ],
            [
                "name" =>  "秋田県",
                "region_id" =>  1,
            ],
            [
                "name" =>  "宮城県",
                "region_id" =>  1,
            ],
            [
                "name" =>  "山形県",
                "region_id" =>  1,
            ],
            [
                "name" =>  "福島県",
                "region_id" =>  1,
            ],
            [
                "name" =>  "東京都",
                "region_id" =>  2,
            ],
            [
                "name" =>  "神奈川県",
                "region_id" =>  2,
            ],
            [
                "name" =>  "埼玉県",
                "region_id" =>  2,
            ],
            [
                "name" =>  "千葉県",
                "region_id" =>  2,
            ],
            [
                "name" =>  "茨城県",
                "region_id" =>  2,
            ],
            [
                "name" =>  "栃木県",
                "region_id" =>  2,
            ],
            [
                "name" =>  "群馬県",
                "region_id" =>  2,
            ],
            [
                "name" =>  "新潟県",
                "region_id" =>  3,
            ],
            [
                "name" =>  "富山県",
                "region_id" =>  3,
            ],
            [
                "name" =>  "石川県",
                "region_id" =>  3,
            ],
            [
                "name" =>  "福井県",
                "region_id" =>  3,
            ],
            [
                "name" =>  "山梨県",
                "region_id" =>  3,
            ],
            [
                "name" =>  "長野県",
                "region_id" =>  3,
            ],
            [
                "name" =>  "岐阜県",
                "region_id" =>  3,
            ],
            [
                "name" =>  "静岡県",
                "region_id" =>  3,
            ],
            [
                "name" =>  "愛知県",
                "region_id" =>  3,
            ],
            [
                "name" =>  "三重県",
                "region_id" =>  3,
            ],
            [
                "name" =>  "滋賀県",
                "region_id" =>  4,
            ],
            [
                "name" =>  "京都府",
                "region_id" =>  4,
            ],
            [
                "name" =>  "大阪府",
                "region_id" =>  4,
            ],
            [
                "name" =>  "兵庫県",
                "region_id" =>  4,
            ],
            [
                "name" =>  "奈良県",
                "region_id" =>  4,
            ],
            [
                "name" =>  "和歌山県",
                "region_id" =>  4,
            ],
            [
                "name" =>  "鳥取県",
                "region_id" =>  5,
            ],
            [
                "name" =>  "島根県",
                "region_id" =>  5,
            ],
            [
                "name" =>  "岡山県",
                "region_id" =>  5,
            ],
            [
                "name" =>  "広島県",
                "region_id" =>  5,
            ],
            [
                "name" =>  "山口県",
                "region_id" =>  5,
            ],
            [
                "name" =>  "徳島県",
                "region_id" =>  5,
            ],
            [
                "name" =>  "香川県",
                "region_id" =>  5,
            ],
            [
                "name" =>  "愛媛県",
                "region_id" =>  5,
            ],
            [
                "name" =>  "高知県",
                "region_id" =>  5,
            ],
            [
                "name" =>  "福岡県",
                "region_id" =>  6,
            ],
            [
                "name" =>  "佐賀県",
                "region_id" =>  6,
            ],
            [
                "name" =>  "長崎県",
                "region_id" =>  6,
            ],
            [
                "name" =>  "熊本県",
                "region_id" =>  6,
            ],
            [
                "name" =>  "大分県",
                "region_id" =>  6,
            ],
            [
                "name" =>  "宮崎県",
                "region_id" =>  6,
            ],
            [
                "name" =>  "鹿児島県",
                "region_id" =>  6,
            ],
            [
                "name" =>  "沖縄県",
                "region_id" =>  6,
            ],
            // "青森県",
            // "岩手県",
            // "秋田県",
            // "宮城県",
            // "山形県",
            // "福島県",
            // "東京都",
            // "神奈川県",
            // "埼玉県",
            // "千葉県",
            // "茨城県",
            // "栃木県",
            // "群馬県",
            // "新潟県",
            // "富山県",
            // "石川県",
            // "福井県",
            // "山梨県",
            // "長野県",
            // "岐阜県",
            // "静岡県",
            // "愛知県",
            // "三重県",
            // "滋賀県",
            // "京都府",
            // "大阪府",
            // "兵庫県",
            // "奈良県",
            // "和歌山県",
            // "鳥取県",
            // "島根県",
            // "岡山県",
            // "広島県",
            // "山口県",
            // "徳島県",
            // "香川県",
            // "愛媛県",
            // "高知県",
            // "福岡県",
            // "佐賀県",
            // "長崎県",
            // "熊本県",
            // "大分県",
            // "宮崎県",
            // "鹿児島県",
            // "沖縄県"
        ];

        foreach ($prefectures as $prefecture) {
            DB::table('prefectures')->insert([$prefecture]);
        }
    }
}
