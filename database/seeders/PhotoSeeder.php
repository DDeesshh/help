<?php

namespace Database\Seeders;

// добавление нового пункта в бд photos

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('photos')->insert([
      ['title'=> 'Машина 5', 'description'=> 'Фото машины 5', 'created_at'=> now(), ]
      ]);

}
}
