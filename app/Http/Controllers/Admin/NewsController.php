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

    public function addNews()
    {
        return view('pages.admin.addNews');
    }

    public function getData(){
        return view('pages.admin.getData');
    }

    public function update()
    {
        echo "admin update"; exit;
    }
}
