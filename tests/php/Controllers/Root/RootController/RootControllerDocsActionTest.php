<?php

use App\Http\Controllers\Root\RootController;
use Illuminate\Http\Request;

/**
 * RootControllerクラスのdocsActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class RootControllerDocsActionTest extends TestCase
{
    /**
     * docsActionで
     * アサイン情報にrequestParamsが存在することを確認.
     */
    public function testDocsActionIsKeyTabbarParams()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'requestParams',
            $getAssignData,
            'error:アサイン情報としてrequestParamsが存在しない'
        );
    }

    /**
     * docsActionで
     * アサイン情報のアサイン情報にtabbarStatusが存在することを確認.
     */
    public function testDocsActionIsKeyTabbarStatus()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'tabbarStatus',
            $getAssignData,
            'error:アサイン情報としてtabbarStatusが存在しない'
        );
    }

    /**
     * docsActionでリクエストがない場合、
     * アサイン情報のtabbarStatusがdocsであることを確認する.
     */
    public function testDocsActionIsTabbarStatusEqualHomeWhenNoRequestParam()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'docs',
            'error:アサイン情報としてtabbarStatusはdocsではない'
        );
    }

    /**
     * docsActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがdocsであることを確認する.
     */
    public function testDocsActionIsTabbarStatusEqualHomeWhenIsHomeParam()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'top']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'docs',
            'error:アサイン情報としてtabbarStatusはdocsではない'
        );
    }

    /**
     * docsActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがdocsであることを確認する.
     */
    public function testDocsActionIsTabbarStatusEqualHomeWhenIsContentsParam()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'top']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'docs',
            'error:アサイン情報としてtabbarStatusはdocsではない'
        );
    }

    /**
     * docsActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがdocsであることを確認する.
     */
    public function testDocsActionIsTabbarStatusEqualHomeWhenIsDocsParam()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'top']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'docs',
            'error:アサイン情報としてtabbarStatusはdocsではない'
        );
    }

    /**
     * docsActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarStatusがdocsであることを確認する.
     */
    public function testDocsActionIsTabbarStatusEqualHomeWhenIsDevParam()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'top']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarStatus'],
            'docs',
            'error:アサイン情報としてtabbarStatusはdocsではない'
        );
    }

    /**
     * docsActionで
     * 使用されているbladeがroot_docs.bladeであることを確認.
     */
    public function testDocsActionUsedBladeName()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $docsAction->getName(),
            'root.root_docs',
            'error:使用されているbladeはroot_docs.bladeではない'
        );
    }
}
