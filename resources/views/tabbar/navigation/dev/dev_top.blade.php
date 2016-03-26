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
                <a href="https://ide.c9.io/igara/slack_rack_php" target="_blank">Cloud9</a>
            </ons-col>
        </ons-row>
        <ons-row>
            <ons-col class="center list__item__center list__item--inset__center">
                <a href="http://syonet.work:8080/ide.html" target="_blank">SyoNet環境上のCloud9</a>
            </ons-col>
        </ons-row>
        <ons-row>
            <ons-col class="center list__item__center list__item--inset__center">
                <a href="https://github.com/igara/syonet/" target="_blank">SyoNetのソース</a>
            </ons-col>
        </ons-row>
    </ons-list>
</ons-page>