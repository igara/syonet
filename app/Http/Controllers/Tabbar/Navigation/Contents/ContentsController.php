<?php

namespace App\Http\Controllers\Tabbar\Navigation\Contents;

use App\Http\Controllers\Controller;
use App\Settings\PathInfo;
use Parsedown;

class ContentsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ContentsController
    |--------------------------------------------------------------------------
    |
    | Contentsコントローラ
    |
    */

    /**
     * Create a new contents controller instance.
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
     * @return view contents/contents_topテンプレート
     */
    public function topAction()
    {
    	return view('tabbar/navigation/contents/contents_top');
    }
}
