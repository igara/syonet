<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\Response;
use App\Settings\PathInfo;

class PhantomJSController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | PhantomJSController
    |--------------------------------------------------------------------------
    |
    | PhantomJSを用いたデバッグコントローラ
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
    	//exit();
    	return view('debug/phantomjs/index');
    }

}
