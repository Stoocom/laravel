<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;


class WelcomePageController extends Controller
{ 
    public function index()
    {
       return <<<php
        <h1>"Приветствую Вас"</h1>
        <a href="/">Главная</a>
        php;
    }

}