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
                'name'=>'Hà Nội',
                'type'=>'Thành phố Trung ương',
            ],
            [
                'matp'=>'79',
                'name'=>'TP HCM',
                'type'=>'Thành phố Trung ương',
            ],
        ]);
    }
}
