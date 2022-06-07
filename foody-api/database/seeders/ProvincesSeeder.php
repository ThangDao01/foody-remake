<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('provinces')->insert([
            [
                'matp'=>'01',
                'name'=>'Thành phố Hà Nội',
                'type'=>'Thành phố Trung ương',
            ],
            [
                'matp'=>'79',
                'name'=>'Thành phố Hồ Chí Minh',
                'type'=>'Thành phố Trung ương',
            ],
        ]);
    }
}
