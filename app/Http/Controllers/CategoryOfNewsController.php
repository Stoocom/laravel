<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CategoryOfNewsController extends Controller
{ 

    private $categoriesOfNews = [
        1 => [
            'title' => 'sport',
        ],
        2 => [
            'title' => 'political',
        ],
        3 => [
            'title' => 'stock_market',
        ],
    ];

    private $news = [
        [
            'id' => '1',
            'id_category' => '3',
            'title' => "Apple's stock grows up",
            'description' => "Apple company taked 2 trillion dollars value on stock market in USA. 
            Because giving on market very popular and strong new version of mobile device - iphone 12. 
            Many analitics sais that this phone is change of all iphone's circle"
        ],
        [
            'id' => '2',
            'id_category' => '3',
            'title' => "NASDAQ takes record",
            'description' => "NASDAQ is taking new record early every week. 
            Because Federal Reserval Center (FRC) give much cash dollars to world economical. 
            The common opinion of many alalitics is after growing always goes down lock"
        ],
        [
            'id' => '3',
            'id_category' => '1',
            'title' => "Russian club Krasnodar goes to next round of UEFA",
            'description' => "Just only russian football club Krasnodar from city with similar name goes to group part of UEFA"
        ],
    ];


    public function showCategories()
    {
        $html = "<h1>Категории</h1>";
        foreach ($this->categoriesOfNews as $id => $item) {
            $html .= <<<php
            <div><a href="/categories/{$id}">{$item['title']}</a></div>
            php;
        }
       
        return $html;
    }

    public function getNewsFromCategory($id) {
        
        $category_news = $this->getNewsByIdCategory($id);

        $html = "<h1>Категории</h1>";
        foreach ($category_news as $id => $item) {
            $html .= <<<php
            <div>
                <h3>{$item['title']}</h3>
                <div>{$item['description']}</div>
            </div>
            <hr>
            php;
        }
        
        return $html;
    }

    private function getNewsByIdCategory($id) {
        $category_news = [];
        foreach ($this->news as $keys => $item) {
            if ($item['id_category'] == $id) {
                array_push($category_news, $item);
            }
        }
        var_dump($category_news);
        return $category_news;
    }

}