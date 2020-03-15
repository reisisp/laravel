<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return  "<h2>Добавление новой новости</h2>
        <form action='#'>
            <p><input placeholder='Введите название новости' name='text'></p>
            <p><input placeholder='Введите описание новости' name='text'></p>
            <p><input placeholder='Введите краткое описание новости' name='text'></p>
            <p><input type='submit' value='Создать'></p>
        </form>";
    }

    public function create()
    {
        echo "admin create"; exit;
    }

    public function update()
    {
        echo "admin update"; exit;
    }
}
