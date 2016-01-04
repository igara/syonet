<?php

namespace App\Http\Controllers\Tabbar\Navigation\Home;

use App\Http\Controllers\Controller;
use App\Settings\PathInfo;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HomeController
    |--------------------------------------------------------------------------
    |
    | Homeコントローラ
    |
    */

    /**
     * Create a new home controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $pathInfo = new PathInfo();
        // $pathInfo->getNodePath();

    }

    /**
     * topアクション
     *
     * @return view home/home_topテンプレート
     */
    public function topAction()
    {
    	return view('tabbar/navigation/home/home_top');
    }

}
