<?php

namespace App\Http\Controllers\Tabbar\Navigation\Dev;

use App\Http\Controllers\Controller;

/**
 * DevController
 * 
 * Devタブ内で表示するコンテンツを扱う
 */
class DevController extends Controller {

    /**
     * Create a new dev controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * topアクション
     *
     * @return view dev/dev_topテンプレート
     */
    public function topAction() {
        return view('tabbar/navigation/dev/dev_top');
    }

}
