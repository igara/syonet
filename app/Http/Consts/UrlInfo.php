<?php

namespace App\Http\Consts;

/**
 * syonetに用いるURLを用いるクラス
 */
class UrlInfo {

    /**
     * rootページのurl情報を取得する
     * 
     * @return array rootのページのurl情報
     */
    public function getRootUrlInfo() {
        return [
            'TOP' => [
                'URL' => '/'
            ],
            'HOME' => [
                'URL' => '/home'
            ],
            'CONTENTS' => [
                'URL' => '/contents'
            ],
            'DOCS' => [
                'URL' => '/docs'
            ],
            'DEV' => [
                'URL' => '/dev'
            ]
        ];
    }

    /**
     * tabbarのurl情報を取得する
     * 
     * @return array tabbarのurl情報
     */
    public function getTabbarUrlInfo() {
        return [
            'TABBAR' => [
                'URL' => '/tabbar/tabbar'
            ]
        ];
    }

    /**
     * sidemenuのurl情報を取得する
     * 
     * @return array sidemenuのurl情報
     */
    public function getSideMenuUrlInfo() {
        return [
            'SIDEMENU' => [
                'URL' => '/sidemenu/sidemenu_top'
            ]
        ];
    }

    /**
     * homeタブで呼ばれるページのurl情報を取得する
     * 
     * @return array homeタブで呼ばれるページのurl情報
     */
    public function getHomeTabUrlInfo() {
        return [
            'TOP' => [
                'URL' => '/tabbar/navigation/home/home_top'
            ]
        ];
    }

    /**
     * Contentsタブで呼ばれるページのurl情報を取得する
     * 
     * @return array Contentsタブで呼ばれるページのurl情報
     */
    public function getContentsTabUrlInfo() {
        return [
            'TOP' => [
                'URL' => '/tabbar/navigation/contents/contents_top'
            ],
            'CHAT' => [
                'URL' => '/tabbar/navigation/contents/contents_chat'
            ]
        ];
    }

    /**
     * Docsタブで呼ばれるページのurl情報を取得する
     * 
     * @return array Docsタブで呼ばれるページのurl情報
     */
    public function getDocsTabUrlInfo() {
        return [
            'TOP' => [
                'URL' => '/tabbar/navigation/docs/docs_top'
            ],
            'SCREENLIST' => [
                'URL' => '/tabbar/navigation/docs/screenlist'
            ]
        ];
    }

    /**
     * Devタブで呼ばれるページのurl情報を取得する
     * 
     * @return array Devタブで呼ばれるページのurl情報
     */
    public function getDevTabUrlInfo() {
        return [
            'TOP' => [
                'URL' => '/tabbar/navigation/dev/dev_top'
            ]
        ];
    }

}
