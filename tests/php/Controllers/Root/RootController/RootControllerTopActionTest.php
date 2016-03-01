<?php

use App\Http\Controllers\Root\RootController;
use Illuminate\Http\Request;

/**
 * RootControllerクラスのtopActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class RootControllerTopActionTest extends TestCase
{
    /**
     * topActionで
     * アサイン情報にrequestParamsが存在することを確認.
     */
    public function testTopActionIsKeyTabbarParams()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'requestParams',
            $getAssignData,
            'error:アサイン情報としてrequestParamsが存在しない'
        );
    }

    /**
     * topActionで
     * アサイン情報のアサイン情報にtabbarStatusが存在することを確認.
     */
    public function testTopActionIsKeyTabbarStatus()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'tabbarStatus',
            $getAssignData,
            'error:アサイン情報としてtabbarStatusが存在しない'
        );
    }

    /**
     * topActionでリクエストがない場合、
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testTopActionIsTabbarStatusEqualHomeWhenNoRequestParam()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:アサイン情報としてtabbarStatusはhomeではない'
        );
    }

    /**
     * topActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testTopActionIsTabbarStatusEqualHomeWhenIsHomeParam()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'top']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:アサイン情報としてtabbarStatusはhomeではない'
        );
    }

    /**
     * topActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testTopActionIsTabbarStatusEqualHomeWhenIsContentsParam()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'top']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:アサイン情報としてtabbarStatusはhomeではない'
        );
    }

    /**
     * topActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testTopActionIsTabbarStatusEqualHomeWhenIsDocsParam()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'top']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:アサイン情報としてtabbarStatusはhomeではない'
        );
    }

    /**
     * topActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testTopActionIsTabbarStatusEqualHomeWhenIsDevParam()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'top']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'home',
            'error:アサイン情報としてtabbarStatusはhomeではない'
        );
    }

    /**
     * topActionで
     * 使用されているbladeがroot_top.bladeであることを確認.
     */
    public function testTopActionUsedBladeName()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $topAction->getName(),
            'root.root_top',
            'error:使用されているbladeはroot_top.bladeではない'
        );
    }
}
