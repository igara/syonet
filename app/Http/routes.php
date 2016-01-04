<?php

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

Route::get('/', 'Tabbar\Navigation\Home\HomeController@topAction');

Route::get('/tabbar/navigation/contents/contents_top', 'Tabbar\Navigation\Contents\ContentsController@topAction');


Route::get('/tabbar/navigation/docs/docs_top', 'Tabbar\Navigation\Docs\DocsController@topAction');
Route::get('/tabbar/navigation/docs/screenlist', 'Tabbar\Navigation\Docs\DocsController@screenListAction');


Route::get('/tabbar/navigation/dev/dev_top', 'Tabbar\Navigation\Dev\DevController@topAction');


Route::get('/tabbar/tabbar_top', 'Tabbar\TabbarController@topAction');

Route::get('/sidemenu/sidemenu_top', 'SideMenu\SideMenuController@topAction');


Route::get('/debug/phpinfo', 'Debug\ServerAndClientInfoController@phpinfoAction');
