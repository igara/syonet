<?php

namespace App\Http\Controllers\Tabbar\Navigation\Contents;

use App\Http\Controllers\Controller;

/**
 * ContentsController
 * 
 * contentsタブ内で表示するコンテンツを扱う
 */
class ContentsController extends Controller {

    /**
     * Create a new contents controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * topアクション
     *
     * @return view contents/contents_topテンプレート
     */
    public function topAction() {
        return view('tabbar/navigation/contents/contents_top');
    }

    /**
     * chatアクション
     *
     * @return view contents/contents_topテンプレート
     */
    public function chatAction() {
        return view('tabbar/navigation/contents/contents_chat');
    }

}
