<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResionsTableSeeder extends Seeder
{
    private $regions = [
        // 上記で定義した地域をそれぞれ$regionに格納している
        "name" => "北海道・東北",
        "name" => "関東",
        "name" => "中部・北陸",
        "name" => "関西",
        "name" => "中国・四国",
        "name" => "九州・沖縄"
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("regions")->insert([
            "name" => "北海道・東北"
        ]);
        DB::table("regions")->insert([
            "name" => "関東"
        ]);
        DB::table("regions")->insert([
            "name" => "中部・北陸"
        ]);

        DB::table("regions")->insert([
            "name" => "関西"
        ]);

        DB::table("regions")->insert([
            "name" => "中国・四国"
        ]);

        DB::table("regions")->insert([
            "name" => "九州・沖縄"
        ]);
    }
}
