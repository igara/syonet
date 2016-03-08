<?php

namespace App\Http\Consts\UrlInfo\Tabbar\Navigation;

/**
 * Contentsページに用いるURLを用いるクラス.
 */
class ContentsUrlInfo
{
    /**
     * Contentsタブで呼ばれるページのurl情報を取得する.
     * 
     * @return array Contentsタブで呼ばれるページのurl情報
     */
    public function getContentsTabUrlInfo()
    {
        return [
            'TOP' => [
                'URL' => '/tabbar/navigation/contents/contents_top',
            ],
            'CHAT' => [
                'URL' => '/tabbar/navigation/contents/contents_chat',
            ],
            'CONNPASS' => [
                'URL' => '/tabbar/navigation/contents/it_connpass',
                'LIST_TEMPLATE_URL' => '/tabbar/navigation/contents/it_connpass/list',
            ],
        ];
    }
}
