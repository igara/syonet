<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class ServerAndClientInfoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ServerAndClientInfoController
    |--------------------------------------------------------------------------
    |
    | このコントローラーはクライアントとサーバの情報を扱う
    |
    */

    /**
     * Create a new ServerAndClientInfo controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * phpinfoアクション
     *
     * @return view debug/phpinfoテンプレート
     */
    public function phpinfoAction()
    {
    	return view('debug/phpinfo');
    }
}
