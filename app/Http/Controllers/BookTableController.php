<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookTableController extends Controller
{
    public function index()
    {
        return view('book_a_table');
    }
    public function contact()
    {
        return view('contact');
    }
    public function home()
    {
        return view('index');
    }
}
