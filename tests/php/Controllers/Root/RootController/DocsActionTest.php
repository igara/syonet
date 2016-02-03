<?php

use App\Http\Controllers\Root\RootController;
use Illuminate\Http\Request;

/**
 * RootControllerクラスのdocsActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class DocsActionTest extends TestCase
{
    /**
     * docsActionで
     * アサイン情報にtabbarParamsが存在することを確認.
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
            'tabbarParams',
            $getAssignData,
            'error:アサイン情報としてtabbarParamsが存在しない'
        );
    }

    /**
     * docsActionで
     * アサイン情報のtabbarParamsの中にhomeがあることを確認.
     */
    public function testDocsActionIsKeyHome()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'home',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにhomeが存在しない'
        );
    }

    /**
     * docsActionで
     * アサイン情報のtabbarParamsの中にcontentsがあることを確認.
     */
    public function testDocsActionIsKeyContents()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'contents',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにcontentsが存在しない'
        );
    }

    /**
     * docsActionで
     * アサイン情報のtabbarParamsの中にdocsがあることを確認.
     */
    public function testDocsActionIsKeyDocs()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'docs',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにdocsが存在しない'
        );
    }

    /**
     * docsActionで
     * アサイン情報のtabbarParamsの中にdevがあることを確認.
     */
    public function testDocsActionIsKeyDev()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertArrayHasKey(
            'dev',
            $getAssignData['tabbarParams'],
            'error:アサイン情報としてtabbarParamsにdevが存在しない'
        );
    }

    /**
     * docsActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のhomeがnullになることを確認.
     */
    public function testDocsActionIsNullHome()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['home'],
            'error:リクエストがない場合にtabbarParamsのhomeがnullになっていない'
        );
    }

    /**
     * docsActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のcontentsがnullになることを確認.
     */
    public function testDocsActionIsNullContents()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['contents'],
            'error:リクエストがない場合にtabbarParamsのcontentsがnullになっていない'
        );
    }

    /**
     * docsActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のdocsがnullになることを確認.
     */
    public function testDocsActionIsNullDocs()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['docs'],
            'error:リクエストがない場合にtabbarParamsのdocsがnullになっていない'
        );
    }

    /**
     * docsActionでリクエストがない場合、
     * アサイン情報のtabbarParamsの中のdevがnullになることを確認.
     */
    public function testDocsActionIsNullDev()
    {
        $rootController = new RootController();
        $request = new Request();
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertNull(
            $getAssignData['tabbarParams']['dev'],
            'error:リクエストがない場合にtabbarParamsのdevがnullになっていない'
        );
    }

    /**
     * docsActionでhome=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のhomeがtopになることを確認.
     */
    public function testDocsActionIsHomeParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'top']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['home'],
            'top',
            'error:home=topのリクエストのとき場合にtabbarParamsのhomeがtopになっていない'
        );
    }

    /**
     * docsActionでhome=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のhomeがhogefugaになることを確認.
     */
    public function testDocsActionIsHomeParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['home' => 'hogefuga']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['home'],
            'hogefuga',
            'error:home=hogefugaのリクエストのとき場合にtabbarParamsのhomeがhogefugaになっていない'
        );
    }

    /**
     * docsActionでcontents=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のcontentsがtopになることを確認.
     */
    public function testDocsActionIsContentsParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'top']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['contents'],
            'top',
            'error:contents=topのリクエストのとき場合にtabbarParamsのcontentsがtopになっていない'
        );
    }

    /**
     * docsActionでcontents=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のcontentsがhogefugaになることを確認.
     */
    public function testDocsActionIsContentsParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['contents' => 'hogefuga']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['contents'],
            'hogefuga',
            'error:contents=hogefugaのリクエストのとき場合に'
             .'tabbarParamsのcontentsがhogefugaになっていない'
        );
    }

    /**
     * docsActionでdocs=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdocsがtopになることを確認.
     */
    public function testDocsActionIsDocsParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'top']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['docs'],
            'top',
            'error:docs=topのリクエストのとき場合にtabbarParamsのdocsがtopになっていない'
        );
    }

    /**
     * docsActionでdocs=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdocsがhogefugaになることを確認.
     */
    public function testDocsActionIsDocsParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['docs' => 'hogefuga']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['docs'],
            'hogefuga',
            'error:docs=hogefugaのリクエストのとき場合にtabbarParamsのdocsがhogefugaになっていない'
        );
    }

    /**
     * docsActionでdev=topというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdevがtopになることを確認.
     */
    public function testDocsActionIsDevParamEqualTop()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'top']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['dev'],
            'top',
            'error:dev=topのリクエストのとき場合にtabbarParamsのdevがtopになっていない'
        );
    }

    /**
     * docsActionでdev=hogefugaというリクエストがあった場合、
     * アサイン情報のtabbarParamsの中のdevがhogefugaになることを確認.
     */
    public function testDocsActionIsDevParamEqualHogefuga()
    {
        $rootController = new RootController();
        $request = new Request(['dev' => 'hogefuga']);
        $docsAction = $rootController->docsAction($request);
        // Viewオブジェクトにアサインされている情報を取得する。
        $getAssignData = $docsAction->getData();
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getAssignData['tabbarParams']['dev'],
            'hogefuga',
            'error:dev=hogefugaのリクエストのとき場合にtabbarParamsのdevがhogefugaになっていない'
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
     * 使用されているbladeがroot_docs.bladeであることを確認
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
