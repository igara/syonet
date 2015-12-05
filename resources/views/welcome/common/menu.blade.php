<ons-sliding-menu var="menu" menu-page="menu.html" main-page="tabbar.html" side="left" type="push" max-slide-distance="200px">
</ons-sliding-menu>

<!-- サイドメニュー -->
<ons-template id="menu.html">
  <ons-list>
    <ons-list-item modifier="chevron" onclick="tabbar.setActiveTab(0), menu.closeMenu()">
      Home
    </ons-list-item>
    <ons-list-item modifier="chevron" onclick="tabbar.setActiveTab(1), menu.closeMenu()">
      Comments
    </ons-list-item>
    <ons-list-item modifier="chevron" onclick="tabbar.setActiveTab(2), menu.closeMenu()">
      Tags
    </ons-list-item>
    <ons-list-item modifier="chevron" onclick="tabbar.setActiveTab(3), menu.closeMenu()">
      Settings
    </ons-list-item>
  </ons-list>
</ons-template>
<!-- /サイドメニュー -->

<!-- メニューのコンテンツ内容 -->
<ons-template id="home.html">
  <ons-page>
    <p style="text-align: center; color: #999; padding-top: 50px;">
      Home
    </p>
  </ons-page>
</ons-template>

<ons-template id="comments.html">
  <ons-page>
    <p style="text-align: center; color: #999; padding-top: 50px;">
      Comments
    </p>
  </ons-page>
</ons-template>

<ons-template id="tags.html">
  <ons-page>
    <p style="text-align: center; color: #999; padding-top: 50px;">
      Tags
    </p>
  </ons-page>
</ons-template>

<ons-template id="settings.html">
  <ons-page>
    <p style="text-align: center; color: #999; padding-top: 50px;">
      Setting
    </p>
  </ons-page>
</ons-template>
<!-- /メニューのコンテンツ内容 -->
