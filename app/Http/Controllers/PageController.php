<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard():view
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

    public function register():view
    {
        return view('register');
    }
}
