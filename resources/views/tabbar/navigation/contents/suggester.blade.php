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
	<sugggester-title></sugggester-title>
	<button class="button button--large">１人モード</button>
	<div style="margin:10px;"></div>
	<button class="button button--large">対戦 〜　2人同時プレイ</button>
	<div style="margin:10px;"></div>
	<button class="button button--large--cta" id="tutorialButton">チュートリアル</button>
<ons-alert-dialog id="alert-dialog">
  <div class="alert-dialog-title">Warning!</div>
  <div class="alert-dialog-content">
    An error has occurred!
  </div>
  <div class="alert-dialog-footer">
    <button id="alert-dialog-button" class="alert-dialog-button">OK</button>
  </div>
</ons-alert-dialog>
</ons-page>