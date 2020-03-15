<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $data = [
        'name' => 'portalName'
    ];

    private function loginForm(){
        return "
        <form action=\"/example/handler.php\">
            <p><input name=\"login\" placeholder='Введите логин'> <input type=\"password\" name=\"pass\" placeholder='Введите пароль'></p>
            <input type=\"checkbox\" id=\"remember\" name=\"remember\" value=\"remember\">
            <label for=\"remember\"> Remember me</label><br>
            <p><input type=\"submit\"></p>
        </form>
        ";
    }

    public function index()
    {
        $welcome = "<h1>Добро пожаловать на новостной портал {$this->data['name']}</h1>";
        $news = route('news');
        $nav = "
            <a href='/'>Главная</a>
            <a href=\"{$news}\">Новости</a>
            <a href='/admin/news'>Admin</a>
        ";
        $html = $nav . "<br>" . $this->loginForm() . $welcome;
        return $html;
    }
}
