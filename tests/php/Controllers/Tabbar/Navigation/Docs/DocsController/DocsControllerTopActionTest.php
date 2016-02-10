<?php

use App\Http\Controllers\Tabbar\Navigation\Docs\DocsController;
use Illuminate\Http\Request;

/**
 * DocsControllerクラスのtopActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class DocsControllerTopActionTest extends TestCase
{
    /**
     * topActionで
     * 使用されているbladeがdocs_top.bladeであることを確認.
     */
    public function testTopActionUsedBladeName()
    {
        $docsController = new DocsController();
        $request = new Request();
        $topAction = $docsController->topAction($request);
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $topAction->getName(),
            'tabbar.navigation.docs.docs_top',
            'error:使用されているbladeはdocs_top.bladeではない'
        );
    }
}
