<?php

namespace App\Http\Controllers\SideMenu;

use App\Http\Controllers\Controller;

/**
 * SideMenuController.
 * 
 * ページを横にスワイプしたときに横から表示されるメニューを扱う
 */
class SideMenuController extends Controller
{
    /**
     * Create a new sidemenu controller instance.
     */
    public function __construct()
    {
    }

    /**
     * topアクション.
     *
     * @return view sidemenu/sidemenu_topテンプレート
     */
    public function topAction()
    {
        return view('sidemenu/sidemenu_top');
    }
}
