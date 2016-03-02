<!-- フッター -->
<ons-tabbar var="tabbar">
    <ons-tab page="{{ $tabbarInfo['HOME']['URL'] }}?{{ $requestParams }}" label="Home" icon="ion-home" {{ strcmp($tabbarStatus, 'home') === 0 ? 'active="true" ' : ' ' }}ng-click="onClickedTab(tabbar);"></ons-tab>
    <ons-tab page="{{ $tabbarInfo['CONTENTS']['URL'] }}?{{ $requestParams }}" label="Contents" icon="ion-social-snapchat-outline" {{ strcmp($tabbarStatus, 'contents') === 0 ? 'active="true" ' : ' ' }}ng-click="onClickedTab(tabbar);"></ons-tab>
    <ons-tab page="{{ $tabbarInfo['DOCS']['URL'] }}?{{ $requestParams }}" label="Docs" icon="ion-clipboard" {{ strcmp($tabbarStatus, 'docs') === 0 ? 'active="true" ' : ' ' }}ng-click="onClickedTab(tabbar);"></ons-tab>
    <ons-tab page="{{ $tabbarInfo['DEV']['URL'] }}?{{ $requestParams }}" label="Dev" icon="ion-ios-cog" {{ strcmp($tabbarStatus, 'dev') === 0 ? 'active="true" ' : ' ' }}ng-click="onClickedTab(tabbar);"></ons-tab>
</ons-tabbar>
<!-- /フッター -->