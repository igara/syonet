<?php

namespace App\Http;

/**
 * syonetに用いるURLやパスを用いるクラス
 */
class PathInfo {

    /**
     * rootページのurl情報を取得する
     * 
     * @return rootのページのurl情報
     */
    public function getRootUrlInfo() {
        return [
            'ROOT_TOP' => [
                'URL' => '/'
            ]
        ];
    }

    /**
     * tabbarのurl情報を取得する
     * 
     * @return tabbarのurl情報
     */
    public function getTabbarUrlInfo() {
        return [
            'TABBAR' => [
                'URL' => '/tabbar/tabbar_top'
            ]
        ];
    }

    /**
     * sidemenuのurl情報を取得する
     * 
     * @return sidemenuのurl情報
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
     * @return homeタブで呼ばれるページのurl情報
     */
    public function getHomeTabUrlInfo() {
        return [
            'TABBAR_HOME_TOP' => [
                'URL' => '/tabbar/navigation/home/home_top'
            ]
        ];
    }

    /**
     * Contentsタブで呼ばれるページのurl情報を取得する
     * 
     * @return Contentsタブで呼ばれるページのurl情報
     */
    public function getContentsTabUrlInfo() {
        return [
            'TABBAR_CONTENTS_TOP' => [
                'URL' => '/tabbar/navigation/contents/contents_top'
            ],
            'TABBAR_CONTENTS_CHAT' => [
                'URL' => '/tabbar/navigation/contents/contents_chat'
            ]
        ];
    }

    /**
     * Docsタブで呼ばれるページのurl情報を取得する
     * 
     * @return Docsタブで呼ばれるページのurl情報
     */
    public function getDocsTabUrlInfo() {
        return [
            'TABBAR_DOCS_TOP' => [
                'URL' => '/tabbar/navigation/docs/docs_top'
            ],
            'TABBAR_DOCS_SCREENLIST' => [
                'URL' => '/tabbar/navigation/docs/screenlist'
            ]
        ];
    }

    /**
     * Devタブで呼ばれるページのurl情報を取得する
     * 
     * @return Devタブで呼ばれるページのurl情報
     */
    public function getDevTabUrlInfo() {
        return [
            'TABBAR_DEV_TOP' => [
                'URL' => '/tabbar/navigation/dev/dev_top'
            ]
        ];
    }

}
