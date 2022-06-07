<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('districts')->insert([
            [
                'maqh' => '001',
                'name' => 'Quận Ba Đình',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '002',
                'name' => 'Quận Hoàn Kiếm',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '003',
                'name' => 'Quận Tây Hồ',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '004',
                'name' => 'Quận Long Biên',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '005',
                'name' => 'Quận Cầu Giấy',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '006',
                'name' => 'Quận Đống Đa',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '007',
                'name' => 'Quận Hai Bà Trưng',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '008',
                'name' => 'Quận Hoàng Mai',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '009',
                'name' => 'Quận Thanh Xuân',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '016',
                'name' => 'Huyện Sóc Sơn',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '017',
                'name' => 'Huyện Đông Anh',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '018',
                'name' => 'Huyện Gia Lâm',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '019',
                'name' => 'Quận Nam Từ Liêm',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '020',
                'name' => 'Huyện Thanh Trì',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '021',
                'name' => 'Quận Bắc Từ Liêm',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '250',
                'name' => 'Huyện Mê Linh',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '268',
                'name' => 'Quận Hà Đông',
                'type' => 'Quận',
                'matp' => '01',
            ],
            [
                'maqh' => '269',
                'name' => 'Thị xã Sơn Tây',
                'type' => 'Thị xã',
                'matp' => '01',
            ],
            [
                'maqh' => '271',
                'name' => 'Huyện Ba Vì',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '272',
                'name' => 'Huyện Phúc Thọ',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '273',
                'name' => 'Huyện Đan Phượng',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '274',
                'name' => 'Huyện Hoài Đức',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '275',
                'name' => 'Huyện Quốc Oai',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '276',
                'name' => 'Huyện Thạch Thất',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '277',
                'name' => 'Huyện Chương Mỹ',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '278',
                'name' => 'Huyện Thanh Oai',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '279',
                'name' => 'Huyện Thường Tín',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '280',
                'name' => 'Huyện Phú Xuyên',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '281',
                'name' => 'Huyện Ứng Hòa',
                'type' => 'Huyện',
                'matp' => '01',
            ],
            [
                'maqh' => '282',
                'name' => 'Huyện Mỹ Đức',
                'type' => 'Huyện',
                'matp' => '01',
            ], [
                'maqh' => '760',
                'name' => 'Quận 1',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '761',
                'name' => 'Quận 12',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '762',
                'name' => 'Quận Thủ Đức',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '763',
                'name' => 'Quận 9',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '764',
                'name' => 'Quận Gò Vấp',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '765',
                'name' => 'Quận Bình Thạnh',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '766',
                'name' => 'Quận Tân Bình',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '767',
                'name' => 'Quận Tân Phú',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '768',
                'name' => 'Quận Phú Nhuận',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '769',
                'name' => 'Quận 2',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '770',
                'name' => 'Quận 3',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '771',
                'name' => 'Quận 10',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '772',
                'name' => 'Quận 11',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '773',
                'name' => 'Quận 4',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '774',
                'name' => 'Quận 5',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '775',
                'name' => 'Quận 6',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '776',
                'name' => 'Quận 8',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '777',
                'name' => 'Quận Bình Tân',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '778',
                'name' => 'Quận 7',
                'type' => 'Quận',
                'matp' => '79',
            ],
            [
                'maqh' => '783',
                'name' => 'Huyện Củ Chi',
                'type' => 'Huyện',
                'matp' => '79',
            ],
            [
                'maqh' => '784',
                'name' => 'Huyện Hóc Môn',
                'type' => 'Huyện',
                'matp' => '79',
            ],
            [
                'maqh' => '785',
                'name' => 'Huyện Bình Chánh',
                'type' => 'Huyện',
                'matp' => '79',
            ],
            [
                'maqh' => '786',
                'name' => 'Huyện Nhà Bè',
                'type' => 'Huyện',
                'matp' => '79',
            ],
            [
                'maqh' => '787',
                'name' => 'Huyện Cần Giờ',
                'type' => 'Huyện',
                'matp' => '79',
            ],
        ]);
    }
}
