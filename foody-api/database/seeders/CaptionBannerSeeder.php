<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaptionBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('caption_banners')->insert([
            [
                'caption_image'=>'https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg',
                'caption_title'=>'Foody App trên Mobile',
                'caption_desc'=>'Khám phá, đặt bàn, giao tận nơi',
                'status'=>'1',
                'link_action'=>'https://www.foody.vn/ung-dung-mobile',
            ],
            [
                'caption_image'=>'https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg',
                'caption_title'=>'Chè Thái Cô linh',
                'caption_desc'=>'Giảm 70k cho đơn tối thiểu 200k',
                'status'=>'1',
                'link_action'=>'',
            ]
        ]);
    }
}
