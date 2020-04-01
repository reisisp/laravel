<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private function prepareCategories()
    {
        $db = \DB::table('categories')->get();

        $categories = [];
        foreach ($db as $value) {
            foreach ($value as $key => $elem) {
                if ($key == 'category_en') {
                    $catKey = $elem;
                } elseif ($key == 'category_ru') {
                    $catVal = $elem;
                } elseif ($key == 'id') {
                    $catId = $elem;
                }
            }
            $categories[$catKey] = $catVal;
        }
        return $categories;
    }

    private function prepareNewsCategory($cat)
    {
        $sqlCat = "SELECT * FROM categories WHERE category_en = :cat";
        $rowsCat = \DB::select($sqlCat, [':cat' => $cat]);
        $newsCat = [];
        foreach ($rowsCat[0] as $key => $value) {
            $newsCat[$key] = $value;
        }
        return $newsCat;
    }

    private function prepareNewsList($cat)
    {
        $catId = $this->prepareNewsCategory($cat)['id'];
        $sql = "SELECT id,title,inform FROM news WHERE cat_id = :cat_id";
        $dbNews = \DB::select($sql, [':cat_id' => $catId]);
        $news = [];
        foreach ($dbNews as $element) {
            $news[] = (array)$element;
        }
        return $news;
    }

    private function prepareNewsCard($id)
    {
        $sql = "SELECT id,title,inform FROM news WHERE id = :id";
        $dbNew = \DB::select($sql, [':id' => $id]);
        $newsCard = (array) $dbNew[0];
        return $newsCard;
    }


    public function categories()
    {
        $categories = $this->prepareCategories();
        return view('pages.news.categories', [
            'categories' => $categories
        ]);
    }

    public function categoryOne($cat)
    {
        $category = $this->prepareNewsCategory($cat);
        $news = $this->prepareNewsList($cat);

        return view('pages.news.categoryOne', [
            'category' => $category,
            'news' => $news
        ]);
    }

    public function newsCard($cat, $id)
    {
        $newsCard = $this->prepareNewsCard($id);
        return view('pages.news.newsCard', [
            'category' => $cat,
            'id' => $id,
            'newsCard' => $newsCard
        ]);
    }
}
