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
    
    <ons-progress value="34" secondary-value="74"></ons-progress>
<ons-progress indeterminate></ons-progress>
<ons-progress type="circular" value="75" secondary-value="0"></ons-progress>
<ons-progress type="circular" value="32" secondary-value="55"></ons-progress>
<ons-progress type="circular" indeterminate></ons-progress>
    <connpass-event></connpass-event>

</ons-page>