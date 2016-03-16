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
    <form action="" method="get">
        <input type="hidden" name="contents" value="connpass">
        <input type="text" class="text-input" placeholder="{{$year}}" name="year" style="width: 50px;">年
        <input type="text" class="text-input" placeholder="{{$month}}" name="month" style="width: 50px;">月
        <input type="text" class="search-input" placeholder="keyword (例)swift" name="keyword" style="width: 200px;">
        <input type="submit" class="button button--light" value="検索">
    </form>
    <connpass-event></connpass-event>
</ons-page>