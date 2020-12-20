<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class NewsController extends Controller
{ 
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

    public function getOneNews($id) {
    
        $newsOne = $this->getNewsById($id);
        return view('news', ['newsOne' => $newsOne]);
    }

    private function getNewsById($id) {
        foreach ($this->news as $news) {
            //$routeName = route('newsOne', $news['id']);
            //dump($routeName);
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return [];
    }

} 