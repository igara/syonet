<!-- ヘッダー -->
<ons-template id="header.html">
    <ons-toolbar>
        <div class="left">
            <!-- サイドメニューを表示する三表示 -->
            <ons-toolbar-button ng-click="menu.toggleMenu()">
                <ons-icon icon="bars"></ons-icon>
            </ons-toolbar-button>
        </div>
        <!-- タイトル -->
        <div class="center">SyoNet</div>
    </ons-toolbar>
    <!-- フッターを呼び出す -->
    <ng-include src="'tabbar.html'"></ng-include>
</ons-template>
<!-- /ヘッダー -->
