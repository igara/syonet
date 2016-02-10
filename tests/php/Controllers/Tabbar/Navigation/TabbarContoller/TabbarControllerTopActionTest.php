<?php

use App\Http\Controllers\Tabbar\TabbarController;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\HomeUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\ContentsUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\DocsUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\DevUrlInfo;
use Illuminate\Http\Request;

/**
 * TabbarControllerクラスのtabbarActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class TabbarControllerTabbarActionTest extends TestCase
{
    /**
     * tabbarActionで
     * 使用されているbladeがtabbar.bladeであることを確認.
     */
    public function testTabbarActionUsedBladeName()
    {
        $tabbarController = new TabbarController();
        $request = new Request();
        $tabbarAction = $tabbarController->tabbarAction($request);
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $tabbarAction->getName(),
            'tabbar.tabbar',
            'error:使用されているbladeはtabbar.tabbar.bladeではない'
        );
    }

    /**
     * tabbarActionで
     * アサイン情報にtabbarInfoが存在することを確認.
     */
    public function testTabbarActionIsKeyTabbarInfo()
    {
        $tabbarController = new TabbarController();
        $request = new Request();
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'tabbarInfo',
            $getAssignData,
            'error:アサイン情報としてtabbarInfoが存在しない'
        );
    }

    /**
     * tabbarActionで
     * アサイン情報にtabbarStatusが存在することを確認.
     */
    public function testTabbarActionIsKeyTabbarStatus()
    {
        $tabbarController = new TabbarController();
        $request = new Request();
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'tabbarStatus',
            $getAssignData,
            'error:アサイン情報としてtabbarStatusが存在しない'
        );
    }

    /**
     * tabbarActionでリクエストパラメータが無い場合、
     * アサイン情報のtabbarInfoのhomeがtopのURLになることを確認.
     */
    public function testTabbarActionIsTabbarInfoEqualHomeWhenNoParam()
    {
        $tabbarController = new TabbarController();
        $request = new Request();
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        $homeUrlInfo = new HomeUrlInfo();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarInfo']['HOME']['URL'],
            $homeUrlInfo->getHomeTabUrlInfo()['TOP']['URL'],
            'error:リクエストパラメータが無い場合にtabbarInfoのhomeがTOPのURLになっていない'
        );
    }

    /**
     * tabbarActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarInfoのhomeがtopのURLになることを確認.
     */
    public function testTabbarActionIsTabbarInfoEqualHomeTop()
    {
        $tabbarController = new TabbarController();
        $request = new Request(['home' => 'top']);
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        $homeUrlInfo = new HomeUrlInfo();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarInfo']['HOME']['URL'],
            $homeUrlInfo->getHomeTabUrlInfo()['TOP']['URL'],
            'error:home=topのリクエストのとき場合にtabbarInfoのhomeがTOPのURLになっていない'
        );
    }

    /**
     * tabbarActionでリクエストパラメータが無い場合、
     * アサイン情報のtabbarInfoのcontentsがtopのURLになることを確認.
     */
    public function testTabbarActionIsTabbarInfoEqualContentsWhenNoParam()
    {
        $tabbarController = new TabbarController();
        $request = new Request();
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        $contentsUrlInfo = new ContentsUrlInfo();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarInfo']['CONTENTS']['URL'],
            $contentsUrlInfo->getContentsTabUrlInfo()['TOP']['URL'],
            'error:リクエストパラメータが無い場合にtabbarInfoのcontentsがTOPのURLになっていない'
        );
    }

    /**
     * tabbarActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarInfoのcontentsがtopのURLになることを確認.
     */
    public function testTabbarActionIsTabbarInfoEqualContentsTop()
    {
        $tabbarController = new TabbarController();
        $request = new Request(['contents' => 'top']);
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        $contentsUrlInfo = new ContentsUrlInfo();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarInfo']['CONTENTS']['URL'],
            $contentsUrlInfo->getContentsTabUrlInfo()['TOP']['URL'],
            'error:contents=topのリクエストのとき場合にtabbarInfoのcontentsがTOPのURLになっていない'
        );
    }

    /**
     * tabbarActionでリクエストパラメータが無い場合、
     * アサイン情報のtabbarInfoのdocsがtopのURLになることを確認.
     */
    public function testTabbarActionIsTabbarInfoEqualDocsWhenNoParam()
    {
        $tabbarController = new TabbarController();
        $request = new Request();
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        $docsUrlInfo = new DocsUrlInfo();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarInfo']['DOCS']['URL'],
            $docsUrlInfo->getDocsTabUrlInfo()['TOP']['URL'],
            'error:リクエストパラメータが無い場合にtabbarInfoのdocsがTOPのURLになっていない'
        );
    }

    /**
     * tabbarActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarInfoのdocsがtopのURLになることを確認.
     */
    public function testTabbarActionIsTabbarInfoEqualDocsTop()
    {
        $tabbarController = new TabbarController();
        $request = new Request(['docs' => 'top']);
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        $docsUrlInfo = new DocsUrlInfo();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarInfo']['DOCS']['URL'],
            $docsUrlInfo->getDocsTabUrlInfo()['TOP']['URL'],
            'error:docs=topのリクエストのとき場合にtabbarInfoのdocsがTOPのURLになっていない'
        );
    }

    /**
     * tabbarActionでdocs=screenlistというリクエストがあった場合、
     * アサイン情報のtabbarInfoのdocsがscreenlistのURLになることを確認.
     */
    public function testTabbarActionIsTabbarInfoEqualDocsScreenList()
    {
        $tabbarController = new TabbarController();
        $request = new Request(['docs' => 'screenlist']);
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        $docsUrlInfo = new DocsUrlInfo();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarInfo']['DOCS']['URL'],
            $docsUrlInfo->getDocsTabUrlInfo()['SCREENLIST']['URL'],
            'error:docs=screenlistのリクエストのとき場合にtabbarInfoのdocsがSCREENLISTのURLになっていない'
        );
    }

    /**
     * tabbarActionでリクエストパラメータが無い場合、
     * アサイン情報のtabbarInfoのdevがtopのURLになることを確認.
     */
    public function testTabbarActionIsTabbarInfoEqualDevWhenNoParam()
    {
        $tabbarController = new TabbarController();
        $request = new Request();
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        $devUrlInfo = new DevUrlInfo();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarInfo']['DEV']['URL'],
            $devUrlInfo->getDevTabUrlInfo()['TOP']['URL'],
            'error:リクエストパラメータが無い場合にtabbarInfoのdevがTOPのURLになっていない'
        );
    }

    /**
     * tabbarActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarInfoのdevがtopのURLになることを確認.
     */
    public function testTabbarActionIsTabbarInfoEqualDev()
    {
        $tabbarController = new TabbarController();
        $request = new Request(['dev' => 'top']);
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        $devUrlInfo = new DevUrlInfo();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarInfo']['DEV']['URL'],
            $devUrlInfo->getDevTabUrlInfo()['TOP']['URL'],
            'error:dev=topのリクエストのとき場合にtabbarInfoのdevがTOPのURLになっていない'
        );
    }

    /**
     * tabbarActionでリクエストパラメータが無い場合、
     * アサイン情報のtabbarStatusがhomeになることを確認.
     */
    public function testTabbarActionIsTabbarStatusEqualHomeWhenNoparam()
    {
        $tabbarController = new TabbarController();
        $request = new Request();
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:リクエストパラメータが無い場合にtabbarStatusがhomeになっていない'
        );
    }

    /**
     * tabbarActionでtabbarstatus=homeというリクエストがあった場合、
     * アサイン情報のtabbarStatusがhomeになることを確認.
     */
    public function testTabbarActionIsTabbarStatusEqualHome()
    {
        $tabbarController = new TabbarController();
        $request = new Request(['tabbarstatus' => 'home']);
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:tabbarstatus=homeのリクエストのとき場合にtabbarStatusがhomeになっていない'
        );
    }

    /**
     * tabbarActionでtabbarstatus=contentsというリクエストがあった場合、
     * アサイン情報のtabbarStatusがcontentsになることを確認.
     */
    public function testTabbarActionIsTabbarStatusEqualContents()
    {
        $tabbarController = new TabbarController();
        $request = new Request(['tabbarstatus' => 'contents']);
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'contents',
            'error:tabbarstatus=contentsのリクエストのとき場合にtabbarStatusがcontentsになっていない'
        );
    }

    /**
     * tabbarActionでtabbarstatus=docsというリクエストがあった場合、
     * アサイン情報のtabbarStatusがdocsになることを確認.
     */
    public function testTabbarActionIsTabbarStatusEqualDocs()
    {
        $tabbarController = new TabbarController();
        $request = new Request(['tabbarstatus' => 'docs']);
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'docs',
            'error:tabbarstatus=docsのリクエストのとき場合にtabbarStatusがdocsになっていない'
        );
    }

    /**
     * tabbarActionでtabbarstatus=devというリクエストがあった場合、
     * アサイン情報のtabbarStatusがdevになることを確認.
     */
    public function testTabbarActionIsTabbarStatusEqualDev()
    {
        $tabbarController = new TabbarController();
        $request = new Request(['tabbarstatus' => 'dev']);
        $tabbarAction = $tabbarController->tabbarAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $tabbarAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'dev',
            'error:tabbarstatus=devのリクエストのとき場合にtabbarStatusがdevになっていない'
        );
    }
}
