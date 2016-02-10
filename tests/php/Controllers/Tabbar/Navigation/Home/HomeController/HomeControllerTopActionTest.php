<?php

use App\Http\Controllers\Tabbar\Navigation\Home\HomeController;
use Illuminate\Http\Request;

/**
 * HomeControllerクラスのtopActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class HomeControllerTopActionTest extends TestCase
{
    /**
     * topActionで
     * 使用されているbladeがhome_top.bladeであることを確認.
     */
    public function testTopActionUsedBladeName()
    {
        $homeController = new HomeController();
        $request = new Request();
        $topAction = $homeController->topAction($request);
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $topAction->getName(),
            'tabbar.navigation.home.home_top',
            'error:使用されているbladeはhome_top.bladeではない'
        );
    }
}
