<?php

// контроллер принимает запрос, при необходимости извлекает данные, передает данные в представление для отображения в браузере.


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Photos;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // функция index
    public function index()
    {
        // $sum = 20+ 30;
        // $name = "desh";
        // return view('home', ['num' => $sum, 'str' => $name]);

        // $photos = DB::select('select * from catalog_photo');
        // return $photos;

        // DB::statement('RENAME TABLE catalog_photo TO photos ');

        // $photos = DB::select('select * from photos');
        // return $photos;

        // обращение к базе данных
        $allPhotos = DB::select('select * from photos order by created_at desc');
        return view('home', ['title' => "Домашняя страница", 'allPhotos' => $allPhotos]);

        //пример 1. Выбрать всех клиентов
        // $customers = DB:: table('customers')->get();
        // return view('home', ['customers'=>$customers]);




    }

}


