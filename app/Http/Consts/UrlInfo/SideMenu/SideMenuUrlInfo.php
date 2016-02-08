<?php

namespace app\Http\Consts\UrlInfo\SideMenu;

/**
 * SideMenuページに用いるURLを用いるクラス.
 */
class SideMenuUrlInfo
{
    /**
     * sidemenuのurl情報を取得する.
     * 
     * @return array sidemenuのurl情報
     */
    public function getSideMenuUrlInfo()
    {
        return [
            'SIDEMENU' => [
                'URL' => '/sidemenu/sidemenu_top',
            ],
        ];
    }
}
