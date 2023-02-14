<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $brands = [

            "name" => "Channel Islands Surfboards",
            "name" => "DHD",
            "name" => "シャープアイ",
            "name" => "JS surfboards",
            "name" => "ロスト",
            "name" => "チリサーフボード",
            "name" => "その他"
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert([$brand]);
        }
    }
}
