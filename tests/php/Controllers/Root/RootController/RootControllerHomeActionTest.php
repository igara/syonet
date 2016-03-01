<?php

use App\Http\Controllers\Root\RootController;
use Illuminate\Http\Request;

/**
 * RootControllerクラスのhomeActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class RootControllerHomeActionTest extends TestCase
{
    /**
     * homeActionで
     * アサイン情報にrequestParamsが存在することを確認.
     */
    public function testHomeActionIsKeyTabbarParams()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'requestParams',
            $getAssignData,
            'error:アサイン情報としてrequestParamsが存在しない'
        );
    }

    /**
     * homeActionで
     * アサイン情報のアサイン情報にtabbarStatusが存在することを確認.
     */
    public function testHomeActionIsKeyTabbarStatus()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'tabbarStatus',
            $getAssignData,
            'error:アサイン情報としてtabbarStatusが存在しない'
        );
    }

    /**
     * homeActionでリクエストがない場合、
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testHomeActionIsTabbarStatusEqualHomeWhenNoRequestParam()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:アサイン情報としてtabbarStatusはhomeではない'
        );
    }

    /**
     * homeActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testHomeActionIsTabbarStatusEqualHomeWhenIsHomeParam()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'top']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:アサイン情報としてtabbarStatusはhomeではない'
        );
    }

    /**
     * homeActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testHomeActionIsTabbarStatusEqualHomeWhenIsContentsParam()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'top']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:アサイン情報としてtabbarStatusはhomeではない'
        );
    }

    /**
     * homeActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testHomeActionIsTabbarStatusEqualHomeWhenIsDocsParam()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'top']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:アサイン情報としてtabbarStatusはhomeではない'
        );
    }

    /**
     * homeActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testHomeActionIsTabbarStatusEqualHomeWhenIsDevParam()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'top']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:アサイン情報としてtabbarStatusはhomeではない'
        );
    }

    /**
     * homeActionで
     * 使用されているbladeがroot_home.bladeであることを確認.
     */
    public function testHomeActionUsedBladeName()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $homeAction->getName(),
            'root.root_home',
            'error:使用されているbladeはroot_home.bladeではない'
        );
    }
}
