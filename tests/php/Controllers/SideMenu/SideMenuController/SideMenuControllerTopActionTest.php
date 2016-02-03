<?php

use App\Http\Controllers\SideMenu\SideMenuController;
use Illuminate\Http\Request;

/**
 * SideMenuControllerクラスのtopActionのテストを行う.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class SideMenuControllerTopActionTest extends TestCase
{
    /**
     * topActionで
     * 使用されているbladeがsidemenu_top.bladeであることを確認.
     */
    public function testTopActionUsedBladeName()
    {
        $sideMenuController = new SideMenuController();
        $request = new Request();
        $topAction = $sideMenuController->topAction($request);
        // 失敗時はエラーメッセージが表示される
        $this->assertEquals(
            $topAction->getName(),
            'sidemenu.sidemenu_top',
            'error:使用されているbladeはsidemenu_top.bladeではない'
        );
    }
}
