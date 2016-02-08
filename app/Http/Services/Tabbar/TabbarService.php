<?php

namespace App\Http\Services\Tabbar;

use Illuminate\Http\Request;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\HomeUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\ContentsUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\DocsUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\DevUrlInfo;

/**
 * TabbarService
 *
 * タブバーの加工を行う
 *
 */
class TabbarService {

    /**
     * Create a new docs controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * タブの情報を取得する
     * 
     * @param Request リクエストパラメータ
     * @return array 各tabで表示するためのURL
     *  
     */
    public function getTabbarInfo($request) {
        // リクエストパラメータからタブの情報を取得する
        $tabbar = $request->only([
            'home',
            'contents',
            'docs',
            'dev'
        ]);

        $homeUrlInfo = new HomeUrlInfo();
        $contentsUrlInfo = new ContentsUrlInfo();
        $docsUrlInfo = new DocsUrlInfo();
        $devUrlInfo = new DevUrlInfo();
        return [
            'HOME' => $this->_getHomeTabInfo($tabbar['home'], $homeUrlInfo->getHomeTabUrlInfo()),
            'CONTENTS' => $this->_getContentsTabInfo($tabbar['contents'], $contentsUrlInfo->getContentsTabUrlInfo()),
            'DOCS' => $this->_getDocsTabInfo($tabbar['docs'], $docsUrlInfo->getDocsTabUrlInfo()),
            'DEV' => $this->_getDevTabInfo($tabbar['dev'], $devUrlInfo->getDevTabUrlInfo())
        ];
    }

    /**
     * Homeタブの情報を取得する
     * 
     * @param string $homeParam リクエストパラメータのhomeの値
     * @param array $homeTabUrlInfo Homeタブ内に表示するページのURL一覧
     * @return string Homeタブに表示するページのURL
     * 
     */
    private function _getHomeTabInfo($homeParam, $homeTabUrlInfo) {

        // パラメータからHomeタブのlistのキー値を作成する
        $listkey = strtoupper($homeParam);

        // homeパラメータ値がhomeタブに存在するurlと一致しない場合
        if (!array_key_exists($listkey, $homeTabUrlInfo)) {
            // home_topを表示させる
            return $homeTabUrlInfo['TOP'];
        } else {
            return $homeTabUrlInfo[$listkey];
        }
    }

    /**
     * Contentsタブの情報を取得する
     * 
     * @param string $contentsParam リクエストパラメータのcontentsの値
     * @param array $contentsTabUrlInfo Contentsタブ内に表示するページのURL一覧
     * @return string Contentsタブに表示するページのURL
     * 
     */
    private function _getContentsTabInfo($contentsParam, $contentsTabUrlInfo) {

        // パラメータからContentsタブのlistのキー値を作成する
        $listkey = strtoupper($contentsParam);

        // homeパラメータ値がContentsタブに存在するurlと一致しない場合
        if (!array_key_exists($listkey, $contentsTabUrlInfo)) {
            // contents_topを表示させる
            return $contentsTabUrlInfo['TOP'];
        } else {
            return $contentsTabUrlInfo[$listkey];
        }
    }

    /**
     * Devタブの情報を取得する
     * 
     * @param string $devParam リクエストパラメータのDevの値
     * @param array $devTabUrlInfo Devタブ内に表示するページのURL一覧
     * @return string Devタブに表示するページのURL
     * 
     */
    private function _getDevTabInfo($devParam, $devTabUrlInfo) {

        // パラメータからDevタブのlistのキー値を作成する
        $listkey = strtoupper($devParam);

        // homeパラメータ値がDevタブに存在するurlと一致しない場合
        if (!array_key_exists($listkey, $devTabUrlInfo)) {
            // Dev_topを表示させる
            return $devTabUrlInfo['TOP'];
        } else {
            return $devTabUrlInfo[$listkey];
        }
    }

    /**
     * Docsタブの情報を取得する
     * 
     * @param string $docsParam リクエストパラメータのdocsの値
     * @param array $docsTabUrlInfo Docsタブ内に表示するページのURL一覧
     * @return string Docsタブに表示するページのURL
     * 
     */
    private function _getDocsTabInfo($docsParam, $docsTabUrlInfo) {

        // パラメータからDocsタブのlistのキー値を作成する
        $listkey = strtoupper($docsParam);

        // homeパラメータ値がdocsタブに存在するurlと一致しない場合
        if (!array_key_exists($listkey, $docsTabUrlInfo)) {
            // docs_topを表示させる
            return $docsTabUrlInfo['TOP'];
        } else {
            return $docsTabUrlInfo[$listkey];
        }
    }

}
