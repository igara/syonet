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
        <li class="list__header">コンテンツ一覧</li>
        <a href="/contents/?contents=connpass">
            <li class="list__item">
                <div class="list__item__center">
                    Connpassイベント検索
                </div>
            </li>
        </a>
    </ul>
</ons-page>