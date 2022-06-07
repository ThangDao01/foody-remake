<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'category_name' => 'Nhà Hàng',
                'category_thumbnail' => 'https://images.foody.vn/caticon/s480x480/foody-01-restoran-635950389575416940.png',
                'type' => '1',
            ],
            [
                'category_name' => 'Sang trọng',
                'category_thumbnail' => 'https://images.foody.vn/caticon/s480x480/foody-12-sangtrong-635950388128057921.png',
                'type' => '1',
            ],
            [
                'category_name' => 'Ăn vặt/vỉa hè',
                'category_thumbnail' => 'https://images.foody.vn/caticon/s480x480/foody-11-anvat-635950388395266822.png',
                'type' => '1',
            ],
            [
                'category_name' => 'Ăn chay',
                'category_thumbnail' => 'https://images.foody.vn/caticon/s480x480/foody-56-anchay-635950379675005450.png',
                'type' => '1',
            ],
            [
                'category_name' => 'Quán ăn',
                'category_thumbnail' => 'https://images.foody.vn/caticon/s480x480/foody-03-rumah%20makan-635950389304770706.png',
                'type' => '1',
            ],
            [
                'category_name' => 'Tiệm bánh',
                'category_thumbnail' => 'https://images.foody.vn/caticon/s480x480/foody-06-tiembanh-635950389009259871.png',
                'type' => '1',
            ],

            [
                'category_name' => 'Đặc sản vùng',
                'category_thumbnail' => '',
                'type' => '2',
            ],
            [
                'category_name' => 'Món bắc',
                'category_thumbnail' => '',
                'type' => '2',
            ],
            [
                'category_name' => 'Món Miền Trung',
                'category_thumbnail' => '',
                'type' => '2',
            ],
            [
                'category_name' => 'Món Miền Nam',
                'category_thumbnail' => '',
                'type' => '2',
            ],
            [
                'category_name' => 'Món Thái',
                'category_thumbnail' => '',
                'type' => '2',
            ],
            [
                'category_name' => 'Món Pháp',
                'category_thumbnail' => '',
                'type' => '2',
            ],


            [
                'category_name' => 'Trà sữa',
                'category_thumbnail' => '',
                'type' => '2',
            ],
            [
                'category_name' => 'Beef steak',
                'category_thumbnail' => '',
                'type' => '2',
            ],
            [
                'category_name' => 'Bánh Ngọt',
                'category_thumbnail' => '',
                'type' => '2',
            ],
            [
                'category_name' => 'Vịt quay',
                'category_thumbnail' => '',
                'type' => '2',
            ],
            [
                'category_name' => 'Lẩu',
                'category_thumbnail' => '',
                'type' => '2',
            ],
        ]);
    }
}
