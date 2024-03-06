<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
// 導進view的method

class CatController extends Controller
{
    public function hello(){
        return view('hello');
        // 導去view頁面
    }

    public function testAction(){
        dd('hello testAction');
        // 導去view頁面
    }

}
