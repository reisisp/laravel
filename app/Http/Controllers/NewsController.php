<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class NewsController extends Controller
{
    private $categories = [
        1 => [
            'title' => 'science',
            'rus' => 'Наука',
            'news' => [
                1 => [
                    'title' => 'Новость науки 1',
                    'body' => 'Какой-то текст'
                ],
                2 => [
                    'title' => 'Новость науки 2',
                    'body' => 'Какой-то текст'
                ],
                3 => [
                    'title' => 'Новость науки 3',
                    'body' => 'Какой-то текст'
                ],
                4 => [
                    'title' => 'Новость науки 4',
                    'body' => 'Какой-то текст'
                ],
                5 => [
                    'title' => 'Новость науки 5',
                    'body' => 'Какой-то текст'
                ]
            ]
        ],
        2 => [
            'title' => 'sport',
            'rus' => 'Спорт',
            'news' => [
                1 => [
                    'title' => 'Новость спорта 1',
                    'body' => 'Какой-то текст'
                ],
                2 => [
                    'title' => 'Новость спорта 2',
                    'body' => 'Какой-то текст'
                ],
                3 => [
                    'title' => 'Новость спорта 3',
                    'body' => 'Какой-то текст'
                ],
                4 => [
                    'title' => 'Новость спорта 4',
                    'body' => 'Какой-то текст'
                ],
                5 => [
                    'title' => 'Новость спорта 5',
                    'body' => 'Какой-то текст'
                ]
            ]
        ],
        3 => [
            'title' => 'economics',
            'rus' => 'Экономика',
            'news' => [
                1 => [
                    'title' => 'Новость Экономики 1',
                    'body' => 'Какой-то текст'
                ],
                2 => [
                    'title' => 'Новость Экономики 2',
                    'body' => 'Какой-то текст'
                ],
                3 => [
                    'title' => 'Новость Экономики 3',
                    'body' => 'Какой-то текст'
                ],
                4 => [
                    'title' => 'Новость Экономики 4',
                    'body' => 'Какой-то текст'
                ],
                5 => [
                    'title' => 'Новость Экономики 5',
                    'body' => 'Какой-то текст'
                ]
            ]
        ],
        4 => [
            'title' => 'politics',
            'rus' => 'Политика',
            'news' => [
                1 => [
                    'title' => 'Новость Политики 1',
                    'body' => 'Какой-то текст'
                ],
                2 => [
                    'title' => 'Новость Политики 2',
                    'body' => 'Какой-то текст'
                ],
                3 => [
                    'title' => 'Новость Политики 3',
                    'body' => 'Какой-то текст'
                ],
                4 => [
                    'title' => 'Новость Политики 4',
                    'body' => 'Какой-то текст'
                ],
                5 => [
                    'title' => 'Новость Политики 5',
                    'body' => 'Какой-то текст'
                ]
            ]
        ],
        5 => [
            'title' => 'games',
            'rus' => 'Игры',
            'news' => [
                1 => [
                    'title' => 'Новость Игр 1',
                    'body' => 'Какой-то текст'
                ],
                2 => [
                    'title' => 'Новость Игр 2',
                    'body' => 'Какой-то текст'
                ],
                3 => [
                    'title' => 'Новость Игр 3',
                    'body' => 'Какой-то текст'
                ],
                4 => [
                    'title' => 'Новость Игр 4',
                    'body' => 'Какой-то текст'
                ],
                5 => [
                    'title' => 'Новость Игр 5',
                    'body' => 'Какой-то текст'
                ]
            ]
        ]
    ];

    private function navigation()
    {
        $news = route('news');
        $home = route('home');

        $html = "
            <a href=\"{$home}\">Главная</a>
            <a href=\"{$news}\">Новости</a>";
        return $html;
    }

    private function prepareNewsList($arr, $category){
        $newList = "<div>";
        foreach ($arr as $key => $value) {
            $url = route('newsOne', [$category, $key]);
            $newList .= "
                <a href=\"{$url}\">{$value['title']}</a>
                <h3>{$value['body']}</h3>
                <hr>
";
        }
        $newList .= "</div>";
        return $newList;
    }

    public function categories()
    {
        $nav = $this->navigation();

        $html = $nav . "<div>";
        foreach ($this->categories as $key => $value) {
            $url = route('category', ['category' => $value['title']]);
            $html .= "<a href=\"{$url}\">{$value['rus']}</a> ";
        }
        $html .= "</div>";
        return $html;
    }

    public function categoryOne($cat)
    {
        $nav = $this->navigation();
        $category = '';
        $news = '';
        foreach ($this->categories as $key => $value) {
            if ($cat == $value['title']){
                $category = "<h1>Категория {$value['rus']}</h1>";
                $news = $this->prepareNewsList($value['news'], $cat);
            }
        }
        $html = $nav . $category . $news;
        return $html;
    }

    public function newsCard($cat, $id){
        $nav = $this->navigation();
        $newsOne = '';
        foreach ($this->categories as $key => $value) {
            if ($cat == $value['title']){
                foreach ($value['news'] as $newsKey => $newsValue){
                    if ($newsKey == $id) {
                        $newsOne = "<h3>{$newsValue['title']}</h3><p>{$newsValue['body']}</p>";
                    }
                }
            }
        }

        return $nav . $newsOne;
    }

}
