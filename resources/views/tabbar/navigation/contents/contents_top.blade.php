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
    <ons-list>
        <ons-row>
            <ons-col class="center list__item__center list__item--inset__center">
                <a href="/contents/?contents=connpass">Connpassイベント検索</a>
            </ons-col>
        </ons-row>
    </ons-list>
</ons-page>