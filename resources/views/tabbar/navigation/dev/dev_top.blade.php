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
        <li class="list__header">開発で使用しているもの一覧</li>
        <a href="https://ide.c9.io/igara/slack_rack_php">
            <li class="list__item">
                <div class="list__item__center">
                    Cloud9
                </div>
            </li>
        </a>
        <a href="http://syonet.work:8080/ide.html">
            <li class="list__item">
                <div class="list__item__center">
                    SyoNet環境上のCloud9
                </div>
            </li>
        </a>
        <a href="https://github.com/igara/syonet/">
            <li class="list__item">
                <div class="list__item__center">
                    SyoNetのソース
                </div>
            </li>
        </a>
    </ul>
</ons-page>