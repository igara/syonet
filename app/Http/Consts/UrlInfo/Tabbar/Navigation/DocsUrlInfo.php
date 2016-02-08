<?php

namespace App\Http\Consts\UrlInfo\Tabbar\Navigation;

/**
 * Docsページに用いるURLを用いるクラス.
 */
class DocsUrlInfo
{
    /**
     * Docsタブで呼ばれるページのurl情報を取得する.
     * 
     * @return array Docsタブで呼ばれるページのurl情報
     */
    public function getDocsTabUrlInfo()
    {
        return [
            'TOP' => [
                'URL' => '/tabbar/navigation/docs/docs_top',
            ],
            'SCREENLIST' => [
                'URL' => '/tabbar/navigation/docs/screenlist',
            ],
        ];
    }
}
