<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return  view('pages.admin.main');
    }

    public function create()
    {
        return view('pages.admin.addNews');
    }

    public function update()
    {
        echo "admin update"; exit;
    }
}
