<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
     * @param Requeat $request リクエスト
     * @return view root_topテンプレート
     */
    public function topAction(Request $request) {
        // リクエストパラメータからタブの情報を取得する
        $tabbarParams = $request->only([
            'home',
            'contents',
            'docs',
            'dev'
        ]);
        $tabbarStatus = 'home';
        return view('root/root_top', compact('tabbarParams', 'tabbarStatus'));
    }

    /**
     * homeアクション
     *
     * @param Requeat $request リクエスト
     * @return view root_homeテンプレート
     */
    public function homeAction(Request $request) {
        // リクエストパラメータからタブの情報を取得する
        $tabbarParams = $request->only([
            'home',
            'contents',
            'docs',
            'dev'
        ]);
        $tabbarStatus = 'home';
        return view('root/root_home', compact('tabbarParams', 'tabbarStatus'));
    }

    /**
     * contentsアクション
     * 
     * @param Requeat $request リクエスト
     * @return view root_contentsテンプレート
     */
    public function contentsAction(Request $request) {
        // リクエストパラメータからタブの情報を取得する
        $tabbarParams = $request->only([
            'home',
            'contents',
            'docs',
            'dev'
        ]);
        $tabbarStatus = 'contents';
        return view('root/root_contents', compact('tabbarParams', 'tabbarStatus'));
    }

    /**
     * docsアクション
     * 
     * @param Requeat $request リクエスト
     * @return view root_docsテンプレート
     */
    public function docsAction(Request $request) {
        // リクエストパラメータからタブの情報を取得する
        $tabbarParams = $request->only([
            'home',
            'contents',
            'docs',
            'dev'
        ]);
        $tabbarStatus = 'docs';
        return view('root/root_docs', compact('tabbarParams', 'tabbarStatus'));
    }

    /**
     * devアクション
     * 
     * @param Requeat $request リクエスト
     * @return view root_devテンプレート
     */
    public function devAction(Request $request) {
        // リクエストパラメータからタブの情報を取得する
        $tabbarParams = $request->only([
            'home',
            'contents',
            'docs',
            'dev',
        ]);
        $tabbarStatus = 'dev';
        return view('root/root_dev', compact('tabbarParams', 'tabbarStatus'));
    }

}
