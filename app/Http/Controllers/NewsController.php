<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class NewsController extends Controller
{
    private $news = [
        1 => [
            'id' => '1',
            'title' => 'Новость науки 1',
            'content' => 'Какой-то текст',
            'category_id' => 1
        ],
        2 => [
            'id' => '2',
            'title' => 'Новость науки 2',
            'content' => 'Какой-то текст',
            'category_id' => 1
        ],
        3 => [
            'id' => '3',
            'title' => 'Новость науки 3',
            'content' => 'Какой-то текст',
            'category_id' => 1
        ],
        4 => [
            'id' => '4',
            'title' => 'Новость науки 4',
            'content' => 'Какой-то текст',
            'category_id' => 1
        ],
        5 => [
            'id' => '5',
            'title' => 'Новость науки 5',
            'content' => 'Какой-то текст',
            'category_id' => 1
        ],
        6 => [
            'id' => '6',
            'title' => 'Новость спорта 1',
            'content' => 'Какой-то текст',
            'category_id' => 2
        ],
        7 => [
            'id' => '7',
            'title' => 'Новость спорта 2',
            'content' => 'Какой-то текст',
            'category_id' => 2
        ],
        8 => [
            'id' => '8',
            'title' => 'Новость спорта 3',
            'content' => 'Какой-то текст',
            'category_id' => 2
        ],
        9 => [
            'id' => '9',
            'title' => 'Новость спорта 4',
            'content' => 'Какой-то текст',
            'category_id' => 2
        ],
        10 => [
            'id' => '10',
            'title' => 'Новость спорта 5',
            'content' => 'Какой-то текст',
            'category_id' => 2
        ],
        11 => [
            'id' => '11',
            'title' => 'Новость Экономики 1',
            'content' => 'Какой-то текст',
            'category_id' => 3
        ],
        12 => [
            'id' => '12',
            'title' => 'Новость Экономики 2',
            'content' => 'Какой-то текст',
            'category_id' => 3
        ],
        13 => [
            'id' => '13',
            'title' => 'Новость Экономики 3',
            'content' => 'Какой-то текст',
            'category_id' => 3
        ],
        14 => [
            'id' => '14',
            'title' => 'Новость Экономики 4',
            'content' => 'Какой-то текст',
            'category_id' => 3
        ],
        15 => [
            'id' => '15',
            'title' => 'Новость Экономики 5',
            'content' => 'Какой-то текст',
            'category_id' => 3
        ],
        16 => [
            'id' => '16',
            'title' => 'Новость Политики 1',
            'content' => 'Какой-то текст',
            'category_id' => 4
        ],
        17 => [
            'id' => '17',
            'title' => 'Новость Политики 2',
            'content' => 'Какой-то текст',
            'category_id' => 4
        ],
        18 => [
            'id' => '18',
            'title' => 'Новость Политики 3',
            'content' => 'Какой-то текст',
            'category_id' => 4
        ],
        19 => [
            'id' => '19',
            'title' => 'Новость Политики 4',
            'content' => 'Какой-то текст',
            'category_id' => 4
        ],
        20 => [
            'id' => '20',
            'title' => 'Новость Политики 5',
            'content' => 'Какой-то текст',
            'category_id' => 4
        ],
        21 => [
            'id' => '21',
            'title' => 'Новость Игр 1',
            'content' => 'Какой-то текст',
            'category_id' => 5
        ],
        22 => [
            'id' => '22',
            'title' => 'Новость Игр 2',
            'content' => 'Какой-то текст',
            'category_id' => 5
        ],
        23 => [
            'id' => '23',
            'title' => 'Новость Игр 3',
            'content' => 'Какой-то текст',
            'category_id' => 5
        ],
        24 => [
            'id' => '24',
            'title' => 'Новость Игр 4',
            'content' => 'Какой-то текст',
            'category_id' => 5
        ],
        25 => [
            'id' => '25',
            'title' => 'Новость Игр 5',
            'content' => 'Какой-то текст',
            'category_id' => 5
        ]
    ];

    private $categories = [
        1 => [
            'title' => 'science',
            'rus' => 'Наука',
        ],
        2 => [
            'title' => 'sport',
            'rus' => 'Спорт',
        ],
        3 => [
            'title' => 'economics',
            'rus' => 'Экономика',
        ],
        4 => [
            'title' => 'politics',
            'rus' => 'Политика',
        ],
        5 => [
            'title' => 'games',
            'rus' => 'Игры',
        ]
    ];

    private function prepareNewsList($arr, $category)
    {
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
        return view('pages.news.categories', [
            'categories' => $this->categories
        ]);
    }

    public function categoryOne($cat)
    {
        $news = [];
        $category = '';
        foreach ($this->categories as $id => $catName) {
            if ($catName['title'] == $cat) {
                $category = $catName;
                foreach ($this->news as $key => $value) {
                    if ($value['category_id'] == $id) {
                        $news[$key] = $value;
                    }
                }
            }
        }

        return view('pages.news.categoryOne', [
            'news' => $news,
            'category' => $category
        ]);
    }

        public function newsCard($cat, $id){
            return view('pages.news.newsCard', ['item' => $this->news[$id], 'category' => $cat]);
        }

}
