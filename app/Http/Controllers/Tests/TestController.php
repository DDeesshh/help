<?php

namespace App\Http\Controllers\Tests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        return view('testviews.test');
    }
}
