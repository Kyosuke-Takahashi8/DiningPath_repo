<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
                'name' => '居酒屋１',
                'tel' => '09034271834',
                'number_of_seats' => 50,
                'opening_hours' => '17:00~23:00',
                'address' => '東京都港区1-1-1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('shops')->insert([
                'name' => '串カツ山田',
                'tel' => '05012345678',
                'number_of_seats' => 40,
                'opening_hours' => '17:00~0:00',
                'address' => '東京都練馬区1-1-1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
 