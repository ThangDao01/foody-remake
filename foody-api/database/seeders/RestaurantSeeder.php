<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'restaurant_name' => 'Botanica - Cafe & Resto',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g1/8934/prof/s1112x695/foody-upload-api-foody-mobile-1_-a3cc9934-210626094457.jpeg',
                'restaurant_phone' => '',
                'restaurant_discount' => 0,
                'restaurant_coordinate' => null,
                'location_province' => 0,
                'location_district' => 0,
                'location_address' => 0,
                'open_time' => null,
                'price_min' => 0,
                'price_max' => 0,
                'is_branch' => false,
                'main_branch_id' => null,
                'total_gallery' => 0,
                'total_reviews' => 0,
                'total_save' => 0,
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'restaurant_name' => 'Botanica - Salad, Steak & Pasta - Giảng Võ',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g1/8934/prof/s1112x695/foody-upload-api-foody-mobile-1_-a3cc9934-210626094457.jpeg',
                'restaurant_phone' => '',
                'restaurant_discount' => '30',
                'restaurant_coordinate' => '',
                'location_province' => '01',
                'location_district' => '007',
                'location_address' => '116 D4 Giảng Võ',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '40000',
                'price_max' => '72000',
                'is_branch' => true,
                'main_branch_id' => '1',
                'total_gallery' => '1987',
                'total_reviews' => '276',
                'total_save' => '1300',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'restaurant_name' => 'Botanica - Salad, Steak & Pasta - Thái Phiên',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g1/8934/prof/s1112x695/foody-upload-api-foody-mobile-1_-a3cc9934-210626094457.jpeg',
                'restaurant_phone' => '',
                'restaurant_discount' => '20',
                'restaurant_coordinate' => '',
                'location_province' => '01',
                'location_district' => '007',
                'location_address' => 'số 3 Thái Phiên',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '40000',
                'price_max' => '72000',
                'is_branch' => true,
                'main_branch_id' => '1',
                'total_gallery' => '2873',
                'total_reviews' => '381',
                'total_save' => '1720',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'restaurant_name' => 'Trà Sữa Tocotoco - Thượng Đình',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g71/702021/prof/s1112x695/foody-mobile-23376408_54246046275.jpg',
                'restaurant_phone' => '',
                'restaurant_discount' => 0,
                'restaurant_coordinate' => '',
                'location_province' => '01',
                'location_district' => '009',
                'location_address' => '266 Thượng Đình, P. Thượng Đình',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '25000',
                'price_max' => '50000',
                'is_branch' => true,
                'main_branch_id' => null,
                'total_gallery' => '112',
                'total_reviews' => '19',
                'total_save' => '120',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'restaurant_name' => 'Kichi Kichi Lẩu Băng Chuyền - Rice City Linh Đàm',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g66/651546/prof/s1242x600/foody-mobile-kichi-jpg-595-636289043128281916.jpg',
                'restaurant_phone' => '',
                'restaurant_discount' => 0,
                'restaurant_coordinate' => '',
                'location_province' => '01',
                'location_district' => '008',
                'location_address' => 'Tầng G, Tòa Trung, Rice City Linh Đàm, KĐT Mới Tây Nam Linh Đàm, Ngõ 15 Bằng Liệt,',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '50000',
                'price_max' => '250000',
                'is_branch' => true,
                'main_branch_id' => null,
                'total_gallery' => '112',
                'total_reviews' => '19',
                'total_save' => '120',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'restaurant_name' => 'Vịt Quay Quảng Đông Thành Chấn',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g3/27094/prof/s1242x600/foody-mobile-vit-quay-quang-dong-thanh-chan-ha-noi.jpg',
                'restaurant_phone' => '',
                'restaurant_discount' => 0,
                'restaurant_coordinate' => '',
                'location_province' => '01',
                'location_district' => '006',
                'location_address' => '94 Khâm Thiên, P. Khâm Thiên',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '50000',
                'price_max' => '165000',
                'is_branch' => true,
                'main_branch_id' => null,
                'total_gallery' => '112',
                'total_reviews' => '19',
                'total_save' => '120',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'restaurant_name' => 'Cake July - Bông Lan Trứng Muối',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g29/286587/prof/s576x330/file_restaurant_photo_5mui_16522-6562faf4-220512002828.jpg',
                'restaurant_phone' => '',
                'restaurant_discount' => 0,
                'restaurant_coordinate' => '',
                'location_province' => '01',
                'location_district' => '005',
                'location_address' => '18 Ngõ 124 Hoàng Ngân, P. Trung Hòa',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '50000',
                'price_max' => '150000',
                'is_branch' => true,
                'main_branch_id' => null,
                'total_gallery' => '112',
                'total_reviews' => '19',
                'total_save' => '120',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'restaurant_name' => 'Lá Cọ - Đặc Sản Rừng',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g65/648132/prof/s576x330/foody-mobile-15894640_71971252819-705-636265799706848691.jpg',
                'restaurant_phone' => '',
                'restaurant_discount' => 0,
                'restaurant_coordinate' => '',
                'location_province' => '01',
                'location_district' => '271',
                'location_address' => 'Cầu Va, Xã Tản Lĩnh',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '50000',
                'price_max' => '150000',
                'is_branch' => true,
                'main_branch_id' => null,
                'total_gallery' => '112',
                'total_reviews' => '19',
                'total_save' => '120',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'restaurant_name' => 'Royaltea - Trà Sữa Hồng Kông - Quảng Oai',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g72/714796/prof/s576x330/foody-mobile-21192713_11869731214.jpg',
                'restaurant_phone' => '',
                'restaurant_discount' => 0,
                'restaurant_coordinate' => '',
                'location_province' => '01',
                'location_district' => '271',
                'location_address' => '143 Quảng Oai, Thị Trấn Tây Đằng',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '30000',
                'price_max' => '600000',
                'is_branch' => true,
                'main_branch_id' => null,
                'total_gallery' => '112',
                'total_reviews' => '19',
                'total_save' => '120',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
            [
                'restaurant_name' => 'Crystal Jade Palace - Lotte Legend Saigon Hotel',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g1/5469/prof/s576x330/foody-upload-api-foody-mobile-1212-210112134926.jpg',
                'restaurant_phone' => '',
                'restaurant_discount' => 0,
                'restaurant_coordinate' => '',
                'location_province' => '79',
                'location_district' => '761',
                'location_address' => 'Legend Hotel, 2A - 4A Tôn Đức Thắng, P. Bến Nghé',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '30000',
                'price_max' => '600000',
                'is_branch' => true,
                'main_branch_id' => null,
                'total_gallery' => '112',
                'total_reviews' => '19',
                'total_save' => '120',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],[
                'restaurant_name' => 'K - Pub - Nướng Phong Cách Pub Hàn Quốc - Đồng Đen',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g109/1082822/prof/s576x330/foody-upload-api-foody-mobile-co-d51e0031-210616145144.jpeg',
                'restaurant_phone' => '',
                'restaurant_discount' => 0,
                'restaurant_coordinate' => '',
                'location_province' => '79',
                'location_district' => '766',
                'location_address' => '103 Đồng Đen, P. 13',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '30000',
                'price_max' => '600000',
                'is_branch' => true,
                'main_branch_id' => null,
                'total_gallery' => '112',
                'total_reviews' => '19',
                'total_save' => '120',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],[
                'restaurant_name' => 'Hải Sản Maria Saigon',
                'restaurant_title' => null,
                'restaurant_thumbnail' => 'https://images.foody.vn/res/g1/4677/prof/s576x330/foody-mobile-r1-jpg-577-635755719265534236.jpg',
                'restaurant_phone' => '',
                'restaurant_discount' => 0,
                'restaurant_coordinate' => '',
                'location_province' => '79',
                'location_district' => '770',
                'location_address' => '172C Nguyễn Đình Chiểu, P. 6',
                'open_time' => '[{"day":"Monday","time_start":"06:00","time_end":"21:30"},{"day":"Tuesday","time_start":"06:00","time_end":"21:30"},{"day":"Wednesday","time_start":"06:00","time_end":"21:30"},{"day":"Thursday","time_start":"06:00","time_end":"21:30"},{"day":"Friday","time_start":"06:00","time_end":"21:30"},{"day":"Saturday","time_start":"null","time_end":"null"},{"day":"Sunday","time_start":"null","time_end":"null"},]',
                'price_min' => '30000',
                'price_max' => '600000',
                'is_branch' => true,
                'main_branch_id' => null,
                'total_gallery' => '112',
                'total_reviews' => '19',
                'total_save' => '120',
                'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],
        ]);
    }
}
