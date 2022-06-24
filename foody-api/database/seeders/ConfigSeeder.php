<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('configs')->insert([
            [
                'company_phone' => '1900 2042',
                'company_policy' => '["Giấy CN ĐKDN số 0311828036 do Sở Kế hoạch và Đầu tư TP.HCM cấp ngày 11/6/2012, sửa đổi lần thứ 23, ngày 10/12/2020","Giấy phép thiết lập MXH trên mạng số 363/GP-BTTTT do Bộ Thông tin và Truyền thông cấp ngày 30/6/2016 Người chịu trách nhiệm: Đặng Hoàng Minh."]',
                'company_location' => 'Công Ty Cổ Phần Foody, Lầu G, Tòa nhà Jabes 1, 244 đường Cống Quỳnh, phường Phạm Ngũ Lão, Quận 1, TP.HCM',
                'company_email' => 'info@foody.vn',
//                'more_information' => '[{"name":"","data":""}]',
                'more_information' => null,
                'link_page' => '[{"social_network":"FaceBook","thumbnail:"","link":"https://www.facebook.com/shopeefoodvn"},
	                             {"social_network":"Instagram","thumbnail:"","link":"https://www.instagram.com/foodysaigon"}]',
                'link_download' => '[{"name":"App Foody iOS","thumbnail":"https://www.foody.vn/style/images/icons/ios-footer.png","fa_icon":"fa-apple","link_action":"https://itunes.apple.com/app/id570435154"},
                                     {"name":"App Foody Android","thumbnail":"https://www.foody.vn/style/images/icons/android-footer.png","fa_icon":"fa-android","link_action":"https://play.google.com/store/apps/details?id=com.foody.vn.activity"}]',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
        ]);
    }
}
