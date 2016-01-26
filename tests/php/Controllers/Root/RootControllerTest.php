<?php

use App\Http\Controllers\Root\RootController;
use Illuminate\Http\Request;

/**
 * RootControllerクラスのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class RootControllerTest extends TestCase
{
    /**
     * topActionで
     * アサイン情報にtabbarParamsが存在することを確認.
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
            'tabbarParams',
            $getAssignData,
            'error:アサイン情報としてtabbarParamsが存在しない'
        );
    }

    /**
     * topActionで
     * アサイン情報のtabbarParamsの中にhomeがあることを確認.
     */
    public function testTopActionIsKeyHome()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'home',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにhomeが存在しない'
        );
    }

    /**
     * topActionで
     * アサイン情報のtabbarParamsの中にcontentsがあることを確認.
     */
    public function testTopActionIsKeyContents()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'contents',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにcontentsが存在しない'
        );
    }

    /**
     * topActionで
     * アサイン情報のtabbarParamsの中にdocsがあることを確認.
     */
    public function testTopActionIsKeyDocs()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'docs',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにdocsが存在しない'
        );
    }

    /**
     * topActionで
     * アサイン情報のtabbarParamsの中にdevがあることを確認.
     */
    public function testTopActionIsKeyDev()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'dev',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにdevが存在しない'
        );
    }

    /**
     * topActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のhomeがnullになることを確認.
     */
    public function testTopActionIsNullHome()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['home'],
            'error:リクエストがない場合にtabbarParamsのhomeがnullになっていない'
        );
    }

    /**
     * topActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のcontentsがnullになることを確認.
     */
    public function testTopActionIsNullContents()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['contents'],
            'error:リクエストがない場合にtabbarParamsのcontentsがnullになっていない'
        );
    }

    /**
     * topActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のdocsがnullになることを確認.
     */
    public function testTopActionIsNullDocs()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['docs'],
            'error:リクエストがない場合にtabbarParamsのdocsがnullになっていない'
        );
    }

    /**
     * topActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のdevがnullになることを確認.
     */
    public function testTopActionIsNullDev()
    {
        $rootController = new RootController();
        $request = new Request();
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['dev'],
            'error:リクエストがない場合にtabbarParamsのdevがnullになっていない'
        );
    }

    /**
     * topActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のhomeがtopになることを確認.
     */
    public function testTopActionIsHomeParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'top']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['home'],
            'top',
            'error:home=topのリクエストのとき場合にtabbarParamsのhomeがtopになっていない'
        );
    }

    /**
     * topActionでhome=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のhomeがhogefugaになることを確認.
     */
    public function testTopActionIsHomeParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'hogefuga']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['home'],
            'hogefuga',
            'error:home=hogefugaのリクエストのとき場合にtabbarParamsのhomeがhogefugaになっていない'
        );
    }

    /**
     * topActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のcontentsがtopになることを確認.
     */
    public function testTopActionIsContentsParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'top']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['contents'],
            'top',
            'error:contents=topのリクエストのとき場合にtabbarParamsのcontentsがtopになっていない'
        );
    }

    /**
     * topActionでcontents=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のcontentsがhogefugaになることを確認.
     */
    public function testTopActionIsContentsParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'hogefuga']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['contents'],
            'hogefuga',
            'error:contents=hogefugaのリクエストのとき場合にtabbarParamsのcontentsがhogefugaになっていない'
        );
    }

    /**
     * topActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdocsがtopになることを確認.
     */
    public function testTopActionIsDocsParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'top']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['docs'],
            'top',
            'error:docs=topのリクエストのとき場合にtabbarParamsのdocsがtopになっていない'
        );
    }

    /**
     * topActionでdocs=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdocsがhogefugaになることを確認.
     */
    public function testTopActionIsDocsParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'hogefuga']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['docs'],
            'hogefuga',
            'error:docs=hogefugaのリクエストのとき場合にtabbarParamsのdocsがhogefugaになっていない'
        );
    }

    /**
     * topActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdevがtopになることを確認.
     */
    public function testTopActionIsDevParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'top']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['dev'],
            'top',
            'error:dev=topのリクエストのとき場合にtabbarParamsのdevがtopになっていない'
        );
    }

    /**
     * topActionでdev=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdevがhogefugaになることを確認.
     */
    public function testTopActionIsDevParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'hogefuga']);
        $topAction = $rootController->topAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $topAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['dev'],
            'hogefuga',
            'error:dev=hogefugaのリクエストのとき場合にtabbarParamsのdevがhogefugaになっていない'
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
     * topActionで
     * アサイン情報のtabbarStatusがhomeであることを確認する.
     */
    public function testTopAction()
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
}
