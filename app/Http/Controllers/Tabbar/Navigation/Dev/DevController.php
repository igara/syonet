<?php

namespace App\Http\Controllers\Tabbar\Navigation\Dev;

use App\Http\Controllers\Controller;
use App\Settings\PathInfo;
use Parsedown;

class DevController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DevController
    |--------------------------------------------------------------------------
    |
    | Devコントローラ
    |
    */

    /**
     * Create a new dev controller instance.
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
     * @return view dev/dev_topテンプレート
     */
    public function topAction()
    {
    	return view('tabbar/navigation/dev/dev_top');
    }
}
