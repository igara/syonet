<?php

namespace App\Http\Controllers\Tabbar\Navigation\Docs;

use App\Http\Controllers\Controller;
use App\Http\Services\Docs\MarkdownService;

/**
 * DocsController.
 *
 * Docsタブ内で表示するコンテンツを扱う
 */
class DocsController extends Controller
{
    /**
     * Create a new docs controller instance.
     */
    public function __construct()
    {
    }

    /**
     * topアクション.
     *
     * @return view docs/docs_topテンプレート
     *              assign:$parseMarkdown readmeファイルをパースさせた内容
     */
    public function topAction()
    {
        $markdownFile = public_path().'/documents/screen/readme.md';
        $parseMarkdown = (new MarkdownService())->getHtmlFromMarkdown($markdownFile);

        return view('tabbar/navigation/docs/docs_top', compact('parseMarkdown'));
    }

    /**
     * screenListアクション.
     *
     * @return markdownをhtmlにパースした内容
     */
    public function screenListAction()
    {
        $markdownFile = public_path().'/documents/screen/readme.md';

        return (new MarkdownService())->getHtmlFromMarkdown($markdownFile);
    }
}
