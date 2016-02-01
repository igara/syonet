<?php

use App\Http\Consts\UrlInfo;

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

// UrlInfoクラスをインスタンス化したものを取得する
$urlInfo = new UrlInfo();

// rootページのurl情報
$rootUrlInfo = $urlInfo->getRootUrlInfo();

// tabbarのurl情報
$tabbarUrlInfo = $urlInfo->getTabbarUrlInfo();

// sidemenuのurl情報
$sidemenuUrlInfo = $urlInfo->getSideMenuUrlInfo();

// homeタブのurl情報
$homeTabUrlInfo = $urlInfo->getHomeTabUrlInfo();

// contentsタブのurl情報
$contentsTabUrlInfo = $urlInfo->getContentsTabUrlInfo();

// docsタブのurl情報
$docsTabUrlInfo = $urlInfo->getDocsTabUrlInfo();

// devタブのurl情報
$devTabUrlInfo = $urlInfo->getDevTabUrlInfo();

// rootページ
Route::get($rootUrlInfo['TOP']['URL'], 'Root\RootController@topAction');
Route::get($rootUrlInfo['HOME']['URL'], 'Root\RootController@homeAction');
Route::get($rootUrlInfo['CONTENTS']['URL'], 'Root\RootController@contentsAction');
Route::get($rootUrlInfo['DOCS']['URL'], 'Root\RootController@docsAction');
Route::get($rootUrlInfo['DEV']['URL'], 'Root\RootController@devAction');

// タブバー
Route::get($tabbarUrlInfo['TABBAR']['URL'], 'Tabbar\TabbarController@tabbarAction');

// サイドメニュー
Route::get($sidemenuUrlInfo['SIDEMENU']['URL'], 'SideMenu\SideMenuController@topAction');

// homeタブ
Route::get($homeTabUrlInfo['TOP']['URL'], 'Tabbar\Navigation\Home\HomeController@topAction');

// contentsタブ
Route::get($contentsTabUrlInfo['TOP']['URL'], 'Tabbar\Navigation\Contents\ContentsController@topAction');
Route::get($contentsTabUrlInfo['CHAT']['URL'], 'Tabbar\Navigation\Contents\ContentsController@chatAction');

// docsタブ
Route::get($docsTabUrlInfo['TOP']['URL'], 'Tabbar\Navigation\Docs\DocsController@topAction');
Route::get($docsTabUrlInfo['SCREENLIST']['URL'], 'Tabbar\Navigation\Docs\DocsController@screenListAction');

// devタブ
Route::get($devTabUrlInfo['TOP']['URL'], 'Tabbar\Navigation\Dev\DevController@topAction');
