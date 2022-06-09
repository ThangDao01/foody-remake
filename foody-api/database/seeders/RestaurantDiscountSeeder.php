<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('restaurant_discounts')->insert([
            [
                'restaurant_id'=>'2',
                'discount_rate'=>'15',
                'time_start'=>Carbon::yesterday('Asia/Ho_Chi_Minh'),
                'time_end'=>Carbon::yesterday('Asia/Ho_Chi_Minh')->addDay(7),
            ],
            [
                'restaurant_id'=>'3',
                'discount_rate'=>'25',
                'time_start'=>Carbon::yesterday('Asia/Ho_Chi_Minh'),
                'time_end'=>Carbon::yesterday('Asia/Ho_Chi_Minh')->addDay(7),
            ],
            [
                'restaurant_id'=>'5',
                'discount_rate'=>'30',
                'time_start'=>Carbon::yesterday('Asia/Ho_Chi_Minh'),
                'time_end'=>Carbon::yesterday('Asia/Ho_Chi_Minh')->addDay(7),
            ],
            [
                'restaurant_id'=>'6',
                'discount_rate'=>'20',
                'time_start'=>Carbon::yesterday('Asia/Ho_Chi_Minh'),
                'time_end'=>Carbon::yesterday('Asia/Ho_Chi_Minh')->addDay(7),
            ],
            [
                'restaurant_id'=>'8',
                'discount_rate'=>'20',
                'time_start'=>Carbon::yesterday('Asia/Ho_Chi_Minh'),
                'time_end'=>Carbon::yesterday('Asia/Ho_Chi_Minh')->addDay(7),
            ],
        ]);
    }
}
