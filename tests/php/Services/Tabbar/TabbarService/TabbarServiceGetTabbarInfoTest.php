<?php

use App\Http\Services\Tabbar\TabbarService;
use Illuminate\Http\Request;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\HomeUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\ContentsUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\DocsUrlInfo;
use App\Http\Consts\UrlInfo\Tabbar\Navigation\DevUrlInfo;

/**
 * TabbarServiceクラスのgetTabbarInfoのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class TabbarServiceGetTabbarInfoTest extends TestCase
{
    /**
     * getTabbarInfoに
     * リクエストのparamがない時、キー値HOMEに対し
     * HOMEのTOPのURLと同じであることを確認する.
     */
    public function testGetTabbarInfoForHomeWhenIsNotParam()
    {
        $tabbarService = new TabbarService();
        $request = new Request();
        $getHomeFromGetTabbarInfo = $tabbarService->getTabbarInfo($request)['HOME'];

        $homeUrlInfo = new HomeUrlInfo();
        $getHomeTabTopUrl = $homeUrlInfo->getHomeTabUrlInfo()['TOP'];
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getHomeFromGetTabbarInfo,
            $getHomeTabTopUrl,
            'error:HOMEタブのURLはHOMEのTOPのURLになっていない'
        );
    }

    /**
     * getTabbarInfoに
     * リクエストのparamがない時、キー値CONTENTSに対し
     * CONTENTSのTOPのURLと同じであることを確認する.
     */
    public function testGetTabbarInfoForContentsWhenIsNotParam()
    {
        $tabbarService = new TabbarService();
        $request = new Request();
        $getContentsFromGetTabbarInfo = $tabbarService->getTabbarInfo($request)['CONTENTS'];

        $contentsUrlInfo = new ContentsUrlInfo();
        $getContentsTabTopUrl = $contentsUrlInfo->getContentsTabUrlInfo()['TOP'];
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getContentsFromGetTabbarInfo,
            $getContentsTabTopUrl,
            'error:CONTENTSタブのURLはCONTENTSのTOPのURLになっていない'
        );
    }

    /**
     * getTabbarInfoに
     * リクエストのparamがない時、キー値DOCSに対し
     * DOCSのTOPのURLと同じであることを確認する.
     */
    public function testGetTabbarInfoForDocsWhenIsNotParam()
    {
        $tabbarService = new TabbarService();
        $request = new Request();
        $getDocsFromGetTabbarInfo = $tabbarService->getTabbarInfo($request)['DOCS'];

        $docsUrlInfo = new DocsUrlInfo();
        $getDocsTabTopUrl = $docsUrlInfo->getDocsTabUrlInfo()['TOP'];
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getDocsFromGetTabbarInfo,
            $getDocsTabTopUrl,
            'error:DOCSタブのURLはDOCSのTOPのURLになっていない'
        );
    }

    /**
     * getTabbarInfoに
     * リクエストのparamがない時、キー値DEVに対し
     * DEVのTOPのURLと同じであることを確認する.
     */
    public function testGetTabbarInfoForDevWhenIsNotParam()
    {
        $tabbarService = new TabbarService();
        $request = new Request();
        $getDevFromGetTabbarInfo = $tabbarService->getTabbarInfo($request)['DEV'];

        $devUrlInfo = new DevUrlInfo();
        $getDevTabTopUrl = $devUrlInfo->getDevTabUrlInfo()['TOP'];
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getDevFromGetTabbarInfo,
            $getDevTabTopUrl,
            'error:DEVタブのURLはDEVのTOPのURLになっていない'
        );
    }

    /**
     * getTabbarInfoに
     * リクエストのparamとしてhome=topの時、キー値HOMEに対し
     * HOMEのTOPのURLと同じであることを確認する.
     */
    public function testGetTabbarInfoForHomeWhenHomeParamIsTop()
    {
        $tabbarService = new TabbarService();
        $request = new Request(['home' => 'top']);
        $getHomeFromGetTabbarInfo = $tabbarService->getTabbarInfo($request)['HOME'];

        $homeUrlInfo = new HomeUrlInfo();
        $getHomeTabTopUrl = $homeUrlInfo->getHomeTabUrlInfo()['TOP'];
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getHomeFromGetTabbarInfo,
            $getHomeTabTopUrl,
            'error:HOMEタブのURLはHOMEのTOPのURLになっていない'
        );
    }

    /**
     * getTabbarInfoに
     * リクエストのparamとしてcontents=topの時、キー値CONTENTSに対し
     * CONTENTSのTOPのURLと同じであることを確認する.
     */
    public function testGetTabbarInfoForContentsWhenContentsParamIsTop()
    {
        $tabbarService = new TabbarService();
        $request = new Request(['contents' => 'top']);
        $getContentsFromGetTabbarInfo = $tabbarService->getTabbarInfo($request)['CONTENTS'];

        $contentsUrlInfo = new ContentsUrlInfo();
        $getContentsTabTopUrl = $contentsUrlInfo->getContentsTabUrlInfo()['TOP'];
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getContentsFromGetTabbarInfo,
            $getContentsTabTopUrl,
            'error:CONTENTSタブのURLはCONTENTSのTOPのURLになっていない'
        );
    }

    /**
     * getTabbarInfoに
     * リクエストのparamとしてdocs=topの時、キー値DOCSに対し
     * DOCSのTOPのURLと同じであることを確認する.
     */
    public function testGetTabbarInfoForDocsWhenDocsParamIsTop()
    {
        $tabbarService = new TabbarService();
        $request = new Request(['docs' => 'top']);
        $getDocsFromGetTabbarInfo = $tabbarService->getTabbarInfo($request)['DOCS'];

        $docsUrlInfo = new DocsUrlInfo();
        $getDocsTabTopUrl = $docsUrlInfo->getDocsTabUrlInfo()['TOP'];
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getDocsFromGetTabbarInfo,
            $getDocsTabTopUrl,
            'error:DOCSタブのURLはDOCSのTOPのURLになっていない'
        );
    }

    /**
     * getTabbarInfoに
     * リクエストのparamとしてdocs=screenlisstの時、キー値DOCSに対し
     * DOCSのSCREENLISTのURLと同じであることを確認する.
     */
    public function testGetTabbarInfoForDocsWhenDocsParamIsScreenlist()
    {
        $tabbarService = new TabbarService();
        $request = new Request(['docs' => 'screenlist']);
        $getDocsFromGetTabbarInfo = $tabbarService->getTabbarInfo($request)['DOCS'];

        $docsUrlInfo = new DocsUrlInfo();
        $getDocsTabTopUrl = $docsUrlInfo->getDocsTabUrlInfo()['SCREENLIST'];
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getDocsFromGetTabbarInfo,
            $getDocsTabTopUrl,
            'error:DOCSタブのURLはDOCSのSCREENLISTのURLになっていない'
        );
    }

    /**
     * getTabbarInfoに
     * リクエストのparamとしてdev=topの時、キー値DEVに対し
     * DEVのTOPのURLと同じであることを確認する.
     */
    public function testGetTabbarInfoForDevWhenDevParamIsTop()
    {
        $tabbarService = new TabbarService();
        $request = new Request(['dev' => 'top']);
        $getDevFromGetTabbarInfo = $tabbarService->getTabbarInfo($request)['DEV'];

        $devUrlInfo = new DevUrlInfo();
        $getDevTabTopUrl = $devUrlInfo->getDevTabUrlInfo()['TOP'];
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $getDevFromGetTabbarInfo,
            $getDevTabTopUrl,
            'error:DEVタブのURLはDEVのTOPのURLになっていない'
        );
    }
}
