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
    <link href="/css/symbol/myicon/icon-garasyo.css" rel="stylesheet" type="text/css">
    <div class="myIconImage" style="margin: 0 auto; top: 20px;">
        <div class="myIconImage-background-topTriangle"></div>
        <div class="myIconImage-background-midddleTriangle"></div>
        <div class="myIconImage-background-rightTriangle"></div>
        <div class="myIconImage-character-head"></div>
        <div class="myIconImage-character-lefteye">
            <div class="myIconImage-character-lefteye-line"></div>
        </div>
        <div class="myIconImage-character-righteye">
            <div class="myIconImage-character-righteye-line"></div>
        </div>
        <div class="myIconImage-character-leftnose"></div>
        <div class="myIconImage-character-rightnose"></div>
        <div class="myIconImage-character-body">
            <div class="myIconImage-character-body-mouth"></div>
        </div>
    </div>
    <div>
        <h2>告知</h2>
        https://syonet.work/　のURLだけオフラインによるWeb閲覧できるようにしました。<br>
        キャッシュが残って古いデザインが出る場合は<br>
        右に画面をスワイプして「Clean　&　Reload」を押すことで最新のデザインが出るかもしれません。
    </div>
</ons-page>