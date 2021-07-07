<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $name = '조원찬';
        $age = 24;
        return view('test.show', compact('name', 'age'));
    }
}
