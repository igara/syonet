<?php

namespace App\Http\Services\Root;

use Illuminate\Http\Request;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\HomeUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\ContentsUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\DocsUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\DevUrlInfo;

/**
 * ImportJSService
 *
 * 読み込むJSファイルを管理するサービス
 */
class ImportJSService
{
    /**
     * Create a new docs controller instance.
     */
    public function __construct()
    {
    }

    /**
     * Contentsで用いるJS取得を行う
     * 
     * @param $requestParams リクエストパラメータ
     *
     * @return array Contentsで用いるるJSの宣言
     */
    public function getConttentsJS($requestParams)
    {
        $importJS = '';
        // $requestParamsにcontent=connpassが含まれる時
        if(strpos($requestParams, 'contents=connpass') === 0){
            $importJS .= '<script type="text/javascript" src="/js/contents/components/connpass.js"></script>';
        }
        return $importJS;
    }
}
