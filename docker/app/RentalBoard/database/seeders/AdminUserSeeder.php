<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 管理者ユーザーのデータを作成
        $adminUser = [
            'role_id' => 10,
            'fullname' => 'Admin User',
            'address' => 'Admin Address',
            'email' => 'admin@example.com',
            'tel' => '12345678901',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];

        // usersテーブルにデータを挿入
        DB::table('users')->insert($adminUser);
    }
}
