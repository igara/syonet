<?php

use App\Http\Controllers\Tabbar\Navigation\Contents\ContentsController;
use Illuminate\Http\Request;

/**
 * ContentsControllerクラスのtopActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class ContentsControllerTopActionTest extends TestCase
{
    /**
     * topActionで
     * 使用されているbladeがcontents_top.bladeであることを確認.
     */
    public function testTopActionUsedBladeName()
    {
        $contentsController = new ContentsController();
        $request = new Request();
        $topAction = $contentsController->topAction($request);
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $topAction->getName(),
            'tabbar.navigation.contents.contents_top',
            'error:使用されているbladeはcontents_top.bladeではない'
        );
    }
}
