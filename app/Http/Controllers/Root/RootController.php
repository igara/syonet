<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * RootController.
 *
 * タブバーやサイドメニューなど動線管理を行う
 */
class RootController extends Controller
{
    /**
     * Create a new docs controller instance.
     */
    public function __construct()
    {
    }

    /**
     * topアクション.
     *
     * @param Requeat $request リクエスト
     *
     * @return view root_topテンプレート
     */
    public function topAction(Request $request)
    {
        // リクエストパラメータを取得する
        $requestParams = $request->getQueryString();
        $tabbarStatus = 'home';

        return view('root/root_top', compact('requestParams', 'tabbarStatus'));
    }

    /**
     * homeアクション.
     *
     * @param Requeat $request リクエスト
     *
     * @return view root_homeテンプレート
     */
    public function homeAction(Request $request)
    {
        // リクエストパラメータを取得する
        $requestParams = $request->getQueryString();
        $tabbarStatus = 'home';

        return view('root/root_home', compact('requestParams', 'tabbarStatus'));
    }

    /**
     * contentsアクション.
     * 
     * @param Requeat $request リクエスト
     *
     * @return view root_contentsテンプレート
     */
    public function contentsAction(Request $request)
    {
        // リクエストパラメータを取得する
        $requestParams = $request->getQueryString();
        $tabbarStatus = 'contents';

        return view('root/root_contents', compact('requestParams', 'tabbarStatus'));
    }

    /**
     * docsアクション.
     * 
     * @param Requeat $request リクエスト
     *
     * @return view root_docsテンプレート
     */
    public function docsAction(Request $request)
    {
        // リクエストパラメータを取得する
        $requestParams = $request->getQueryString();
        $tabbarStatus = 'docs';

        return view('root/root_docs', compact('requestParams', 'tabbarStatus'));
    }

    /**
     * devアクション.
     * 
     * @param Requeat $request リクエスト
     *
     * @return view root_devテンプレート
     */
    public function devAction(Request $request)
    {
        // リクエストパラメータを取得する
        $requestParams = $request->getQueryString();
        $tabbarStatus = 'dev';

        return view('root/root_dev', compact('requestParams', 'tabbarStatus'));
    }
}
