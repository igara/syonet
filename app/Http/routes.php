<?php

use App\Http\PathInfo;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

// PathInfoクラスをインスタンス化したものを取得する
$pathInfo = new PathInfo();

// rootページのurl情報
$rootUrlInfo = $pathInfo->getRootUrlInfo();

// tabbarのurl情報
$tabbarUrlInfo = $pathInfo->getTabbarUrlInfo();

$sidemenuUrlInfo = $pathInfo->getSideMenuUrlInfo();

// homeタブのurl情報
$homeTabUrlInfo = $pathInfo->getHomeTabUrlInfo();

// contentsタブのurl情報
$contentsTabUrlInfo = $pathInfo->getContentsTabUrlInfo();

// docsタブのurl情報
$docsTabUrlInfo = $pathInfo->getDocsTabUrlInfo();

// devタブのurl情報
$devTabUrlInfo = $pathInfo->getDevTabUrlInfo();


Route::get($rootUrlInfo['TOP_SCREEN']['URL'], 'Tabbar\Navigation\Home\HomeController@topAction');

// タブバー
Route::get($tabbarUrlInfo['TABBAR']['URL'], 'Tabbar\TabbarController@topAction');

// サイドメニュー
Route::get($sidemenuUrlInfo['SIDEMENU']['URL'], 'SideMenu\SideMenuController@topAction');

// contentsタブ
Route::get($contentsTabUrlInfo['TABBAR_CONTENTS_TOP']['URL'], 'Tabbar\Navigation\Contents\ContentsController@topAction');
Route::get($contentsTabUrlInfo['TABBAR_CONTENTS_CHAT']['URL'], 'Tabbar\Navigation\Contents\ContentsController@chatAction');

// docsタブ
Route::get($docsTabUrlInfo['TABBAR_DOCS_TOP']['URL'], 'Tabbar\Navigation\Docs\DocsController@topAction');
Route::get($docsTabUrlInfo['TABBAR_DOCS_SCREENLIST']['URL'], 'Tabbar\Navigation\Docs\DocsController@screenListAction');

// devタブ
Route::get($devTabUrlInfo['TABBAR_DEV_TOP']['URL'], 'Tabbar\Navigation\Dev\DevController@topAction');


Route::get('/debug/phpinfo', 'Debug\ServerAndClientInfoController@phpinfoAction');
