<?php

namespace App\Http\Controllers\Tabbar\Navigation\Contents;

use App\Http\Controllers\Controller;

/**
 * SuggesterController.
 * 
 * contentsタブ内で表示するSuggesterゲームのコントローラ
 */
class SuggesterController extends Controller
{
    /**
     * Create a new contents controller instance.
     */
    public function __construct()
    {
    }

    /**
     * suggesterアクション.
     *
     * @return view contents/suggesterテンプレート
     */
    public function suggesterAction()
    {
        return view('tabbar/navigation/contents/suggester');
    }
}
