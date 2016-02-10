<?php

namespace App\Http\Consts\UrlInfo\Tabbar\Navigation;

/**
 * Homeページに用いるURLを用いるクラス.
 */
class HomeUrlInfo
{
    /**
     * homeタブで呼ばれるページのurl情報を取得する.
     * 
     * @return array homeタブで呼ばれるページのurl情報
     */
    public function getHomeTabUrlInfo()
    {
        return [
            'TOP' => [
                'URL' => '/tabbar/navigation/home/home_top',
            ],
        ];
    }
}
