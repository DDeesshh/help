<?php

//к бд goods

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *  @return void
     */

    public function run(): void
    {
        //заполнить таблицу goods двумя записями
        // DB::table('goods')->insert([
        //     ['title' => 'Toyota Camry', 'price' => 2500, 'description' => 'Среднеразмерный седан с просторным салоном и хорошей топливной экономичностью.'],
        //     ['title' => 'Honda Civic', 'price' => 2000, 'description' => 'Компактный автомобиль с отличной управляемостью и надежностью.'],
        //     ['title' => 'Ford F-150', 'price' => 3000, 'description' => 'Пикап с мощным двигателем и высокой грузоподъемностью.'],
        //     ['title' => 'Chevrolet Silverad', 'price' => 3200, 'description' => 'Пикап с просторным салоном и широким выбором опций.']
        // ]);

        // вставить строку со случайными числами
        DB::table('goods')->insert([
            'title' => Str::random(10),
            'description' => Str::random(50),
            'price' => rand(100, 10000),
        ]);
    }
}
