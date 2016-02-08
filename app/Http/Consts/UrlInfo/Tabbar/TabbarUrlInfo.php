<?php

namespace app\Http\Consts\UrlInfo\Tabbar;

/**
 * Tabbarページに用いるURLを用いるクラス.
 */
class TabbarUrlInfo
{
    /**
     * tabbarのurl情報を取得する.
     * 
     * @return array tabbarのurl情報
     */
    public function getTabbarUrlInfo()
    {
        return [
            'TABBAR' => [
                'URL' => '/tabbar/tabbar',
            ],
        ];
    }
}
