<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;

/**
 * RootController
 *
 * タブバーやサイドメニューなど動線管理を行う
 *
 */
class RootController extends Controller {

    /**
     * Create a new docs controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * topアクション
     *
     * @return view root_topテンプレート
     */
    public function topAction() {
        return view('root/root_top');
    }

}
