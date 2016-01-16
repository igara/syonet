<?php

namespace App\Http\Controllers\Tabbar\Navigation\Home;

use App\Http\Controllers\Controller;

/**
 * HomeController
 * 
 * Homeタブ内で表示するコンテンツを扱う
 */
class HomeController extends Controller {

    /**
     * Create a new home controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * topアクション
     *
     * @return view home/home_topテンプレート
     */
    public function topAction() {
        return view('tabbar/navigation/home/home_top');
    }

}
