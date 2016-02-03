<?php

use App\Http\Controllers\Root\RootController;
use Illuminate\Http\Request;

/**
 * RootControllerクラスのdevActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class DevActionTest extends TestCase
{
    /**
     * devActionで
     * アサイン情報にtabbarParamsが存在することを確認.
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
            'tabbarParams',
            $getAssignData,
            'error:アサイン情報としてtabbarParamsが存在しない'
        );
    }

    /**
     * devActionで
     * アサイン情報のtabbarParamsの中にhomeがあることを確認.
     */
    public function testDevActionIsKeyHome()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'home',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにhomeが存在しない'
        );
    }

    /**
     * devActionで
     * アサイン情報のtabbarParamsの中にcontentsがあることを確認.
     */
    public function testDevActionIsKeyContents()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'contents',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにcontentsが存在しない'
        );
    }

    /**
     * devActionで
     * アサイン情報のtabbarParamsの中にdocsがあることを確認.
     */
    public function testDevActionIsKeyDocs()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'docs',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにdocsが存在しない'
        );
    }

    /**
     * devActionで
     * アサイン情報のtabbarParamsの中にdevがあることを確認.
     */
    public function testDevActionIsKeyDev()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'dev',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにdevが存在しない'
        );
    }

    /**
     * devActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のhomeがnullになることを確認.
     */
    public function testDevActionIsNullHome()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['home'],
            'error:リクエストがない場合にtabbarParamsのhomeがnullになっていない'
        );
    }

    /**
     * devActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のcontentsがnullになることを確認.
     */
    public function testDevActionIsNullContents()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['contents'],
            'error:リクエストがない場合にtabbarParamsのcontentsがnullになっていない'
        );
    }

    /**
     * devActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のdocsがnullになることを確認.
     */
    public function testDevActionIsNullDocs()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['docs'],
            'error:リクエストがない場合にtabbarParamsのdocsがnullになっていない'
        );
    }

    /**
     * devActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のdevがnullになることを確認.
     */
    public function testDevActionIsNullDev()
    {
        $rootController = new RootController();
        $request = new Request();
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['dev'],
            'error:リクエストがない場合にtabbarParamsのdevがnullになっていない'
        );
    }

    /**
     * devActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のhomeがtopになることを確認.
     */
    public function testDevActionIsHomeParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'top']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['home'],
            'top',
            'error:home=topのリクエストのとき場合にtabbarParamsのhomeがtopになっていない'
        );
    }

    /**
     * devActionでhome=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のhomeがhogefugaになることを確認.
     */
    public function testDevActionIsHomeParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'hogefuga']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['home'],
            'hogefuga',
            'error:home=hogefugaのリクエストのとき場合にtabbarParamsのhomeがhogefugaになっていない'
        );
    }

    /**
     * devActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のcontentsがtopになることを確認.
     */
    public function testDevActionIsContentsParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'top']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['contents'],
            'top',
            'error:contents=topのリクエストのとき場合にtabbarParamsのcontentsがtopになっていない'
        );
    }

    /**
     * devActionでcontents=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のcontentsがhogefugaになることを確認.
     */
    public function testDevActionIsContentsParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'hogefuga']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['contents'],
            'hogefuga',
            'error:contents=hogefugaのリクエストのとき場合に'
             .'tabbarParamsのcontentsがhogefugaになっていない'
        );
    }

    /**
     * devActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdocsがtopになることを確認.
     */
    public function testDevActionIsDocsParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'top']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['docs'],
            'top',
            'error:docs=topのリクエストのとき場合にtabbarParamsのdocsがtopになっていない'
        );
    }

    /**
     * devActionでdocs=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdocsがhogefugaになることを確認.
     */
    public function testDevActionIsDocsParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'hogefuga']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['docs'],
            'hogefuga',
            'error:docs=hogefugaのリクエストのとき場合にtabbarParamsのdocsがhogefugaになっていない'
        );
    }

    /**
     * devActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdevがtopになることを確認.
     */
    public function testDevActionIsDevParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'top']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['dev'],
            'top',
            'error:dev=topのリクエストのとき場合にtabbarParamsのdevがtopになっていない'
        );
    }

    /**
     * devActionでdev=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdevがhogefugaになることを確認.
     */
    public function testDevActionIsDevParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'hogefuga']);
        $devAction = $rootController->devAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $devAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['dev'],
            'hogefuga',
            'error:dev=hogefugaのリクエストのとき場合にtabbarParamsのdevがhogefugaになっていない'
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
     * 使用されているbladeがroot_dev.bladeであることを確認
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
