<?php

namespace App\Http\Controllers\Tabbar\Navigation\Contents\It;

use App\Http\Controllers\Controller;
use App\Http\Services\Contents\It\Event\ConnpassEventService;
use Illuminate\Http\Request;

/**
 * EventController.
 * 
 * contentsタブ内で表示するコンテンツとして
 * ITのEventのコンテンツを扱う
 */
class EventController extends Controller
{
    /**
     * Create a new event controller instance.
     */
    public function __construct()
    {
    }

    /**
     * topアクション.
     *
     * @return view contents/it/event_topテンプレート
     */
    public function topAction()
    {
        return view('tabbar/navigation/contents/contents_top');
    }

    /**
     * connpassアクション.
     *
     * @return view contents/it/event/connpassテンプレート
     */
    public function connpassAction(Request $request)
    {
        $connpassEventEvent = new ConnpassEventService();
        $month = $connpassEventEvent->getMonth($request);
        $year = $connpassEventEvent->getYear($request);
        return view(
            'tabbar/navigation/contents/it/event/connpass',
            compact('month','year')
        );
    }

    /**
     * connpassアクション.
     *
     * @return view contents/it/event/connpass_listテンプレート
     */
    public function connpassListAction()
    {
        return view('tabbar/navigation/contents/it/event/connpass_list');
    }
}
