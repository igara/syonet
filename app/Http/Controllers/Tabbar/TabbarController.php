<?php

namespace App\Http\Controllers\Tabbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Tabbar\TabbarService;

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
        
    }

    /**
     * tabbarアクション
     *
     * @return view tabbar/tabbarテンプレート
     */
    public function tabbarAction(Request $request) {
        $tabbarInfo = (new TabbarService())->getTabbarInfo($request);
        $tabbarStatus = $request['tabbarstatus'];
        return view('tabbar/tabbar', compact('tabbarInfo', 'tabbarStatus'));
    }

}
