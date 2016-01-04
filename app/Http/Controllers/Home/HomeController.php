<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\Response;
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
     * @return view home/topテンプレート
     */
    public function topAction()
    {
    	return view('home/top');
    }

}
