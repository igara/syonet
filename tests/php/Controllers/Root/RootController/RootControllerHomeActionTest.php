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
     * アサイン情報にtabbarParamsが存在することを確認.
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
            'tabbarParams',
            $getAssignData,
            'error:アサイン情報としてtabbarParamsが存在しない'
        );
    }

    /**
     * homeActionで
     * アサイン情報のtabbarParamsの中にhomeがあることを確認.
     */
    public function testHomeActionIsKeyHome()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'home',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにhomeが存在しない'
        );
    }

    /**
     * homeActionで
     * アサイン情報のtabbarParamsの中にcontentsがあることを確認.
     */
    public function testHomeActionIsKeyContents()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'contents',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにcontentsが存在しない'
        );
    }

    /**
     * homeActionで
     * アサイン情報のtabbarParamsの中にdocsがあることを確認.
     */
    public function testHomeActionIsKeyDocs()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'docs',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにdocsが存在しない'
        );
    }

    /**
     * homeActionで
     * アサイン情報のtabbarParamsの中にdevがあることを確認.
     */
    public function testHomeActionIsKeyDev()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'dev',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにdevが存在しない'
        );
    }

    /**
     * homeActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のhomeがnullになることを確認.
     */
    public function testHomeActionIsNullHome()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['home'],
            'error:リクエストがない場合にtabbarParamsのhomeがnullになっていない'
        );
    }

    /**
     * homeActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のcontentsがnullになることを確認.
     */
    public function testHomeActionIsNullContents()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['contents'],
            'error:リクエストがない場合にtabbarParamsのcontentsがnullになっていない'
        );
    }

    /**
     * homeActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のdocsがnullになることを確認.
     */
    public function testHomeActionIsNullDocs()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['docs'],
            'error:リクエストがない場合にtabbarParamsのdocsがnullになっていない'
        );
    }

    /**
     * homeActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のdevがnullになることを確認.
     */
    public function testHomeActionIsNullDev()
    {
        $rootController = new RootController();
        $request = new Request();
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['dev'],
            'error:リクエストがない場合にtabbarParamsのdevがnullになっていない'
        );
    }

    /**
     * homeActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のhomeがtopになることを確認.
     */
    public function testHomeActionIsHomeParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'top']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['home'],
            'top',
            'error:home=topのリクエストのとき場合にtabbarParamsのhomeがtopになっていない'
        );
    }

    /**
     * homeActionでhome=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のhomeがhogefugaになることを確認.
     */
    public function testHomeActionIsHomeParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'hogefuga']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['home'],
            'hogefuga',
            'error:home=hogefugaのリクエストのとき場合にtabbarParamsのhomeがhogefugaになっていない'
        );
    }

    /**
     * homeActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のcontentsがtopになることを確認.
     */
    public function testHomeActionIsContentsParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'top']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['contents'],
            'top',
            'error:contents=topのリクエストのとき場合にtabbarParamsのcontentsがtopになっていない'
        );
    }

    /**
     * homeActionでcontents=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のcontentsがhogefugaになることを確認.
     */
    public function testHomeActionIsContentsParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'hogefuga']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['contents'],
            'hogefuga',
            'error:contents=hogefugaのリクエストのとき場合に'
             .'tabbarParamsのcontentsがhogefugaになっていない'
        );
    }

    /**
     * homeActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdocsがtopになることを確認.
     */
    public function testHomeActionIsDocsParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'top']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['docs'],
            'top',
            'error:docs=topのリクエストのとき場合にtabbarParamsのdocsがtopになっていない'
        );
    }

    /**
     * homeActionでdocs=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdocsがhogefugaになることを確認.
     */
    public function testHomeActionIsDocsParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'hogefuga']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['docs'],
            'hogefuga',
            'error:docs=hogefugaのリクエストのとき場合にtabbarParamsのdocsがhogefugaになっていない'
        );
    }

    /**
     * homeActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdevがtopになることを確認.
     */
    public function testHomeActionIsDevParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'top']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['dev'],
            'top',
            'error:dev=topのリクエストのとき場合にtabbarParamsのdevがtopになっていない'
        );
    }

    /**
     * homeActionでdev=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdevがhogefugaになることを確認.
     */
    public function testHomeActionIsDevParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'hogefuga']);
        $homeAction = $rootController->homeAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $homeAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['dev'],
            'hogefuga',
            'error:dev=hogefugaのリクエストのとき場合にtabbarParamsのdevがhogefugaになっていない'
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
