<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $data = [
        'name' => 'portalName'
    ];

    public function index()
    {
        return view('pages.main', [
            'name' => $this->data['name']]);
    }
}
