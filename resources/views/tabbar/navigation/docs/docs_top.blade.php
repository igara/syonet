<!-- ヘッダー -->
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
<!-- /ヘッダー -->
<ons-page>
    <ul class="list">
        <li class="list__header">ドキュメント一覧</li>
        <a href="/docs/?docs=screenlist">
            <li class="list__item">
                <div class="list__item__center">
                    ScreenList 作成した画面一覧
                </div>
            </li>
        </a>
        <a href="/documents/styleguide" target="_blank">
            <li class="list__item">
                <div class="list__item__center">
                    StyleGuide CSSとタグの資料
                </div>
            </li>
        </a>
    </ul>
</ons-page>