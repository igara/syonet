<?php

use App\Http\Controllers\Root\RootController;
use Illuminate\Http\Request;

/**
 * RootControllerクラスのcontentsActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class RootControllerContentsActionTest extends TestCase
{
    /**
     * contentsActionで
     * アサイン情報にrequestParamsが存在することを確認.
     */
    public function testContentsActionIsKeyTabbarParams()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'requestParams',
            $getAssignData,
            'error:アサイン情報としてrequestParamsが存在しない'
        );
    }

    /**
     * contentsActionで
     * アサイン情報のアサイン情報にtabbarStatusが存在することを確認.
     */
    public function testContentsActionIsKeyTabbarStatus()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'tabbarStatus',
            $getAssignData,
            'error:アサイン情報としてtabbarStatusが存在しない'
        );
    }

    /**
     * contentsActionでリクエストがない場合、
     * アサイン情報のtabbarStatusがcontentsであることを確認する.
     */
    public function testContentsActionIsTabbarStatusEqualHomeWhenNoRequestParam()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'contents',
            'error:アサイン情報としてtabbarStatusはcontentsではない'
        );
    }

    /**
     * contentsActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがcontentsであることを確認する.
     */
    public function testContentsActionIsTabbarStatusEqualHomeWhenIsHomeParam()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'top']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'contents',
            'error:アサイン情報としてtabbarStatusはcontentsではない'
        );
    }

    /**
     * contentsActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがcontentsであることを確認する.
     */
    public function testContentsActionIsTabbarStatusEqualHomeWhenIsContentsParam()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'top']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'contents',
            'error:アサイン情報としてtabbarStatusはcontentsではない'
        );
    }

    /**
     * contentsActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがcontentsであることを確認する.
     */
    public function testContentsActionIsTabbarStatusEqualHomeWhenIsDocsParam()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'top']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'contents',
            'error:アサイン情報としてtabbarStatusはcontentsではない'
        );
    }

    /**
     * contentsActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがcontentsであることを確認する.
     */
    public function testContentsActionIsTabbarStatusEqualHomeWhenIsDevParam()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'top']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'contents',
            'error:アサイン情報としてtabbarStatusはcontentsではない'
        );
    }
    /**
     * contentsActionで
     * 使用されているbladeがroot_contents.bladeであることを確認.
     */
    public function testContentsActionUsedBladeName()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $contentsAction->getName(),
            'root.root_contents',
            'error:使用されているbladeはroot_contents.bladeではない'
        );
    }
}
