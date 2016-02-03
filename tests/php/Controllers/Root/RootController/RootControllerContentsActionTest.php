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
     * アサイン情報にtabbarParamsが存在することを確認.
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
            'tabbarParams',
            $getAssignData,
            'error:アサイン情報としてtabbarParamsが存在しない'
        );
    }

    /**
     * contentsActionで
     * アサイン情報のtabbarParamsの中にhomeがあることを確認.
     */
    public function testContentsActionIsKeyHome()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'home',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにhomeが存在しない'
        );
    }

    /**
     * contentsActionで
     * アサイン情報のtabbarParamsの中にcontentsがあることを確認.
     */
    public function testContentsActionIsKeyContents()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'contents',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにcontentsが存在しない'
        );
    }

    /**
     * contentsActionで
     * アサイン情報のtabbarParamsの中にdocsがあることを確認.
     */
    public function testContentsActionIsKeyDocs()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'docs',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにdocsが存在しない'
        );
    }

    /**
     * contentsActionで
     * アサイン情報のtabbarParamsの中にdevがあることを確認.
     */
    public function testContentsActionIsKeyDev()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'dev',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにdevが存在しない'
        );
    }

    /**
     * contentsActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のhomeがnullになることを確認.
     */
    public function testContentsActionIsNullHome()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['home'],
            'error:リクエストがない場合にtabbarParamsのhomeがnullになっていない'
        );
    }

    /**
     * contentsActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のcontentsがnullになることを確認.
     */
    public function testContentsActionIsNullContents()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['contents'],
            'error:リクエストがない場合にtabbarParamsのcontentsがnullになっていない'
        );
    }

    /**
     * contentsActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のdocsがnullになることを確認.
     */
    public function testContentsActionIsNullDocs()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['docs'],
            'error:リクエストがない場合にtabbarParamsのdocsがnullになっていない'
        );
    }

    /**
     * contentsActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のdevがnullになることを確認.
     */
    public function testContentsActionIsNullDev()
    {
        $rootController = new RootController();
        $request = new Request();
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['dev'],
            'error:リクエストがない場合にtabbarParamsのdevがnullになっていない'
        );
    }

    /**
     * contentsActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のhomeがtopになることを確認.
     */
    public function testContentsActionIsHomeParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'top']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['home'],
            'top',
            'error:home=topのリクエストのとき場合にtabbarParamsのhomeがtopになっていない'
        );
    }

    /**
     * contentsActionでhome=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のhomeがhogefugaになることを確認.
     */
    public function testContentsActionIsHomeParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'hogefuga']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['home'],
            'hogefuga',
            'error:home=hogefugaのリクエストのとき場合にtabbarParamsのhomeがhogefugaになっていない'
        );
    }

    /**
     * contentsActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のcontentsがtopになることを確認.
     */
    public function testContentsActionIsContentsParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'top']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['contents'],
            'top',
            'error:contents=topのリクエストのとき場合にtabbarParamsのcontentsがtopになっていない'
        );
    }

    /**
     * contentsActionでcontents=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のcontentsがhogefugaになることを確認.
     */
    public function testContentsActionIsContentsParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'hogefuga']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['contents'],
            'hogefuga',
            'error:contents=hogefugaのリクエストのとき場合に'
             .'tabbarParamsのcontentsがhogefugaになっていない'
        );
    }

    /**
     * contentsActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdocsがtopになることを確認.
     */
    public function testContentsActionIsDocsParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'top']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['docs'],
            'top',
            'error:docs=topのリクエストのとき場合にtabbarParamsのdocsがtopになっていない'
        );
    }

    /**
     * contentsActionでdocs=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdocsがhogefugaになることを確認.
     */
    public function testContentsActionIsDocsParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'hogefuga']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['docs'],
            'hogefuga',
            'error:docs=hogefugaのリクエストのとき場合にtabbarParamsのdocsがhogefugaになっていない'
        );
    }

    /**
     * contentsActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdevがtopになることを確認.
     */
    public function testContentsActionIsDevParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'top']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['dev'],
            'top',
            'error:dev=topのリクエストのとき場合にtabbarParamsのdevがtopになっていない'
        );
    }

    /**
     * contentsActionでdev=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdevがhogefugaになることを確認.
     */
    public function testContentsActionIsDevParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'hogefuga']);
        $contentsAction = $rootController->contentsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $contentsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['dev'],
            'hogefuga',
            'error:dev=hogefugaのリクエストのとき場合にtabbarParamsのdevがhogefugaになっていない'
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
