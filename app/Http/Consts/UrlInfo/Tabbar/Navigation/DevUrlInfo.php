<?php

namespace App\Http\Consts\UrlInfo\Tabbar\Navigation;

/**
 * Devページに用いるURLを用いるクラス.
 */
class DevUrlInfo
{
    /**
     * Devタブで呼ばれるページのurl情報を取得する.
     * 
     * @return array Devタブで呼ばれるページのurl情報
     */
    public function getDevTabUrlInfo()
    {
        return [
            'TOP' => [
                'URL' => '/tabbar/navigation/dev/dev_top',
            ],
        ];
    }
}
