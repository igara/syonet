<?php

namespace App\Http\Services\Docs;

use Parsedown;

/**
 * MarkdownService.
 *
 * Markdownを扱うService
 */
class MarkdownService
{
    /**
     * Create a new instance.
     */
    public function __construct()
    {
    }

    /**
     * Markdownのファイルを読み込みHTMLを取得する.
     * 
     * @param string $markdownFile Markdownのファイル名
     *
     * @return string HTML
     *                ファイルの読み込みに失敗したときはfalseを返す
     */
    public function getHtmlFromMarkdown($markdownFile)
    {
        if (file_exists($markdownFile)) {
            return Parsedown::instance()->text(file_get_contents($markdownFile));
        }

        return false;
    }
}
