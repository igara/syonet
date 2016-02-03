<?php

// rootページ
Route::get('/', 'Root\RootController@topAction');
Route::get('/home', 'Root\RootController@homeAction');
Route::get('/contents', 'Root\RootController@contentsAction');
Route::get('/docs', 'Root\RootController@docsAction');
Route::get('/dev', 'Root\RootController@devAction');

// タブバー
Route::get('/tabbar/tabbar', 'Tabbar\TabbarController@tabbarAction');

// サイドメニュー
Route::get('/sidemenu/sidemenu_top', 'SideMenu\SideMenuController@topAction');

// homeタブ
Route::get('/tabbar/navigation/home/home_top', 'Tabbar\Navigation\Home\HomeController@topAction');

// contentsタブ
Route::get('/tabbar/navigation/contents/contents_top', 'Tabbar\Navigation\Contents\ContentsController@topAction');
Route::get('/tabbar/navigation/contents/contents_chat', 'Tabbar\Navigation\Contents\ContentsController@chatAction');

// docsタブ
Route::get('/tabbar/navigation/docs/docs_top', 'Tabbar\Navigation\Docs\DocsController@topAction');
Route::get('/tabbar/navigation/docs/screenlist', 'Tabbar\Navigation\Docs\DocsController@screenListAction');

// devタブ
Route::get('/tabbar/navigation/dev/dev_top', 'Tabbar\Navigation\Dev\DevController@topAction');
