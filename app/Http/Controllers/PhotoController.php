<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $photos = DB::select('select * from photos');
        return view('photos.index', ['photos' => $photos]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // dd($request->input('name'));

        // если есть ошибка в данных, то аавтоматически перезагрузка страницы с формой

        $validatedData = $request->validate([
            'title' => ['required', 'unique:photos,title', 'max:255', 'min:3'],
            'description' => ['required'],
        ]);

        // запись в бд

        $title = $request->input('title');
        $description = $request->input('description');

        DB::insert('insert into photos (title, description) values (:title, :description)', ['title' => $title, 'description' => $description]);

        return "Фотография с названием " . $request->input('title') . ". Описанием " . $request->input('description')  . ". Путем " . $request->input('path') . " будет сохранена в БД";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $photos = DB::select('select id from photos');
        return "Фотография с номером " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return view('photos.edit', ['id' => $id]);

        $photos = DB::select('select * from photos where id = ?', [$id]);
        return view('photos.edit', ['photo' => $photos[0]]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dump($id);
        // dd($request);

        $title = $request->input('title');
        $description = $request->input('description');

        DB::update('UPDATE photos SET title =  ? , description = ? WHERE id = ?', [$title, $description, $id]);
        dd($id);
        dd($request);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return "Будет удалена фотография с номером $id";

        DB::delete('delete from photos where id = ?', [$id]);
        return "Будет удалена фотография с номером $id";
    }
}
