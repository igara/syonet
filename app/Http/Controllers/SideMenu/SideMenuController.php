<?php

namespace App\Http\Controllers\SideMenu;

use App\Http\Controllers\Controller;
use App\Settings\PathInfo;

class SideMenuController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | SideMenuController
    |--------------------------------------------------------------------------
    |
    | SideMenuコントローラ
    |
    */

    /**
     * Create a new sidemenu controller instance.
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
     * @return view sidemenu/sidemenu_topテンプレート
     */
    public function topAction()
    {
    	return view('sidemenu/sidemenu_top');
    }

}
