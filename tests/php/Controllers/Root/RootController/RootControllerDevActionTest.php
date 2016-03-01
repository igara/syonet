<?php

use App\Http\Controllers\Root\RootController;
use Illuminate\Http\Request;

/**
 * RootControllerクラスのdevActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class RootControllerDevActionTest extends TestCase
{
    /**
     * devActionで
     * アサイン情報にrequestParamsが存在することを確認.
     */
    public function testDevActionIsKeyTabbarParams()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'requestParams',
            $getAssignData,
            'error:アサイン情報としてrequestParamsが存在しない'
        );
    }

    /**
     * devActionで
     * アサイン情報のアサイン情報にtabbarStatusが存在することを確認.
     */
    public function testDevActionIsKeyTabbarStatus()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'tabbarStatus',
            $getAssignData,
            'error:アサイン情報としてtabbarStatusが存在しない'
        );
    }

    /**
     * devActionでリクエストがない場合、
     * アサイン情報のtabbarStatusがdevであることを確認する.
     */
    public function testDevActionIsTabbarStatusEqualHomeWhenNoRequestParam()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'dev',
            'error:アサイン情報としてtabbarStatusはdevではない'
        );
    }

    /**
     * devActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがdevであることを確認する.
     */
    public function testDevActionIsTabbarStatusEqualHomeWhenIsHomeParam()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'top']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'dev',
            'error:アサイン情報としてtabbarStatusはdevではない'
        );
    }

    /**
     * devActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがdevであることを確認する.
     */
    public function testDevActionIsTabbarStatusEqualHomeWhenIsContentsParam()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'top']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'dev',
            'error:アサイン情報としてtabbarStatusはdevではない'
        );
    }

    /**
     * devActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがdevであることを確認する.
     */
    public function testDevActionIsTabbarStatusEqualHomeWhenIsDocsParam()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'top']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'dev',
            'error:アサイン情報としてtabbarStatusはdevではない'
        );
    }

    /**
     * devActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがdevであることを確認する.
     */
    public function testDevActionIsTabbarStatusEqualHomeWhenIsDevParam()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'top']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'dev',
            'error:アサイン情報としてtabbarStatusはdevではない'
        );
    }

    /**
     * devActionで
     * 使用されているbladeがroot_dev.bladeであることを確認.
     */
    public function testDevActionUsedBladeName()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $devAction->getName(),
            'root.root_dev',
            'error:使用されているbladeはroot_dev.bladeではない'
        );
    }
}
