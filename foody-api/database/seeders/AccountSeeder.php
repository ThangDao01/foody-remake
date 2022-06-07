<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('accounts')->insert([
            [
                'username' => 'nguyenvana',
                'password_hash' => '',
                'first_name' => 'Nguyễn',
                'last_name' => 'Văn A',
                'avatar' => 'https://res.cloudinary.com/thangdao04/image/upload/v1649451832/zuzd0yz1ez0pznqjzsmy.png',
                'style' => '',
                'token' => '',
                'phone_number' => '123456789',
                'location_province' => '',
                'location_district' => '',
                'location_address' => '',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [

            ]
        ]);

    }
}
