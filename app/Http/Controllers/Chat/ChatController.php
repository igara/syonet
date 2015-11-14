<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\Response;
use App\Settings\PathInfo;

class ChatController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ChatController
    |--------------------------------------------------------------------------
    |
    | チャット機能が実装されているコントローラ
    |
    */

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $pathInfo = new PathInfo();
        $pathInfo->getNodePath();

    }

    /**
     * indexを開く画面
     *
     * @return Response
     */
    public function indexAction()
    {
    	return view('chat/index');
    }

}
