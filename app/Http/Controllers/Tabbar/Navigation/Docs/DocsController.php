<?php

namespace App\Http\Controllers\Tabbar\Navigation\Docs;

use App\Http\Controllers\Controller;
use App\Settings\PathInfo;
use Parsedown;

class DocsController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DocsController
    |--------------------------------------------------------------------------
    |
    | Docsコントローラ
    |
    */

    /**
     * Create a new docs controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $pathInfo = new PathInfo();
        // $pathInfo->getNodePath();

    }

    /**
     * topアクション
     *
     * @return view docs/docs_topテンプレート
     *         assign:$parseMarkdown readmeファイルをパースさせた内容
     */
    public function topAction()
    {
        $parseMarkdown = $this->getDocsScreenListHtml();
    	return view('tabbar/navigation/docs/docs_top', compact('parseMarkdown'));
    }
 
    /**
     * screenListアクション
     *
     * @return markdownをhtmlにパースした内容
     */
    public function screenListAction()
    {
    	return $this->getDocsScreenListHtml();
    }

    /**
     * 画面のドキュメントを管轄している一覧を取得する
     */
    private function getDocsScreenListHtml()
    {
        $readmeFile = file_get_contents('docs/screen/readme.md');
        return Parsedown::instance()->text($readmeFile);
    }
}
