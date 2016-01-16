<?php

namespace App\Http\Controllers\Tabbar;

use App\Http\Controllers\Controller;

/**
 * TabbarController
 * 
 * ページの下に表示しているタブバーを扱う
 */
class TabbarController extends Controller {

    /**
     * Create a new tabbar controller instance.
     *
     * @return void
     */
    public function __construct() {
        // $pathInfo = new PathInfo();
        // $pathInfo->getNodePath();
    }

    /**
     * topアクション
     *
     * @return view tabbar/tabbar_topテンプレート
     */
    public function topAction() {
        return view('tabbar/tabbar_top');
    }

}
