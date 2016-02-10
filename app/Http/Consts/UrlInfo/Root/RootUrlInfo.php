<?php

namespace app\Http\Consts\UrlInfo\Root;

/**
 * Rootページに用いるURLを用いるクラス.
 */
class RootUrlInfo
{
    /**
     * rootページのurl情報を取得する.
     * 
     * @return array rootのページのurl情報
     */
    public function getRootUrlInfo()
    {
        return [
            'TOP' => [
                'URL' => '/',
            ],
            'HOME' => [
                'URL' => '/home',
            ],
            'CONTENTS' => [
                'URL' => '/contents',
            ],
            'DOCS' => [
                'URL' => '/docs',
            ],
            'DEV' => [
                'URL' => '/dev',
            ],
        ];
    }
}
