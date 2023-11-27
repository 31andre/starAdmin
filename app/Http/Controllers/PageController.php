<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index():view
    {
        return view('index');
    }


    public function chart():view
    {
        return view('chart');
    }

    public function datatable()
    {
        return view('tables.datatable');
    }

    public function basictable()
    {
        return view('tables.basic-table');
    }

    public function login():view
    {
        return view('login');
    }

    public function register():view
    {
        return view('register');
    }
}
