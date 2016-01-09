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
	<li><a href="https://ide.c9.io/igara/slack_rack_php" target="_blank">Cloud9</a></li>
	<li><a href="http://syonet.work:8080/ide.html" target="_blank">SyoNet環境上のCloud9</a></li>
	<li><a href="https://syonet.work:1337/" target="_blank">vorlon</a></li>
	<li><a href="/debug/phpinfo" target="_blank">phpinfo</a></li>
	<li><a href="https://github.com/igara/syonet/" target="_blank">SyoNetのソース</a></li>
</ons-page>