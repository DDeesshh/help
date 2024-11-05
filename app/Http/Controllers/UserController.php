<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = DB::select('select * from users');
        // return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Валидация
        $validatedData = $request->validate(rules: [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:100',
            'password' => 'required|string|confirmed|min:3|max:15',
        ]);

        // Запись в таблицу users
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        DB::insert('insert into users (name, email, password) values (:name, :email, :password)', ['name' => $name, 'email' => $email, 'password' => $password]);
        return "Пользователь с именем " . $request->input('name') . ". Почтой " . $request->input('email') . ". Паролем " . $request->input('password') . " будет сохранен в БД";

    }

    public function loginform()
    {
        return view('users.loginform');
    }

    public function login(Request $request)
    {
        // dump($request->all());

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'Введенные данные не соотвествуют',
        ]);
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $user = User::create([
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password), // Хеширование пароля
    //     ]);

    //     Auth::login($user);

    //     return redirect()->intended('home');
    // }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginform');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
