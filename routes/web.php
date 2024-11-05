<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Tests\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ----------------------Маршруты------------------------

// маршрут для home страницы, /
Route::get('/', function () {
    return view('home');
})->name('home');

// маршрут для контактов
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// маршрут для данных из формы
Route::post('/contact-store', function (Request $request) {
    return "Ваши данные сохранены:<br> " . "имя: " . $request->name . "<br>" . "email: " . $request->email . "<br>" . " <b>сохранены</b>" . "<br>" . "<p>Перейдите на <a href=" . route('home') . ">главную страницу</a></p>";
})->name('contact.store');

// маршрут для страницы about
// Route::view('/about', 'about');
Route::get('/about', function () {
    return view('about');
})->name('about');

// маршрут для страницы create
Route::get('/create', function () {
    return view('create');
})->name('create');


// маршрут для страницы contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// маршрут для страницы index
Route::get('/index', function () {
    return view('index');
})->name('index');

// маршрут для страницы edit
Route::get('/edit', function () {
    return view('edit');
})->name('edit');

// маршруты для страницы test
Route::get('/', 'App\Http\Controllers\Tests\TestController@index')->name('test');
Route::get('/test', [TestController::class, 'index']);

// маршрут для HomeController()
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('/');

// маршрут для контроллера ресурсов
Route::resource('photos', PhotoController::class);
Route::resource('users', UserController::class);

// парамертры для маршрута
Route::get('/news/{id}/{aut}', function ($id, $author) {
    return "Новость дня номер $id, автор новости $author";
})->where('id', '[0-9]+');

// // маршрут массива в home
// Route::get('/home', function () {
//     return view('home', ['title' => 'Home Page']);
// })->name('home');

// маршрут массива в about
Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
})->name('about');

// // для массива в /
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
})->name('home');

// маршрут для страницы login
Route::get('/users/login', function () {
    return view('login');
})->name('login');


// ----------------------Перенаправление------------------------

// перенаправление пользователя на /photos/create, если было указано /create
Route::redirect('/create', '/photos/create');

// перенаправление пользователя на /users/login, если было указано /create
// Route::redirect('/login', '/users/login');
// перенаправление пользователя на /users/login, если было указано /create
// Route::redirect('/users/create', '/create');

// перенаправление пользователя на home, если было указано about
// Route::redirect('/about', '/');

// перенаправление пользователя на home, если было указано /
Route::redirect('/', '/home');


// ----------------------Страница ошибки------------------------

// перенаправление на страницу ошибки
Route::fallback(function () {
    return "<h1>Что-то пошло не так, простите ...</h1><p>Перейдите на <a href=" . route('home') . ">главную страницу</a></p>";
});

//  подробная информация об ошибке
Route::fallback(function () {
    // abort(404, "Жаль, но страница не существует...");
    return "<h1>Что-то пошло не так, простите ...</h1><p>Перейдите на <a href=" . route('home') . ">главную страницу</a></p>";
});


// маршруты для логина и пароля

Route:: get('/login', [UserController:: class, 'loginform' ])->name('loginform');
Route:: post('/login', [UserController:: class, 'login' ])->name('login');

Route:: get ('/logout', [UserController :: class, 'logout' ])->name('logout');

// Route:: get('/users/login', [UserController:: class, 'login' ])->name('login');
// Route:: post('/users/login', [UserController:: class, 'login' ])->name('login');





