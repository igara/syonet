<?php

namespace App\Http\Services\Docs;

use Parsedown;

/**
 * MarkdownService
 *
 * Markdownを扱うService
 *
 */
class MarkdownService {

    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Markdownのファイルを読み込みHTMLを取得する
     * 
     * @param string $markdownFile Markdownのファイル名
     * @return string HTML
     */
    public function getHtmlFromMarkdown($markdownFile) {
        return Parsedown::instance()->text(file_get_contents($markdownFile));
    }

}
