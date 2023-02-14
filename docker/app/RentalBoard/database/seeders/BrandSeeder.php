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

            "Channel Islands Surfboards",
            "DHD",
            "シャープアイ",
            "JS surfboards",
            "ロスト",
            "チリサーフボード",
            "その他",
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert(['name' => $brand]);
        }
    }
}
