<ons-sliding-menu var="menu" menu-page="menu.html" main-page="tabbar.html" side="left" type="push" max-slide-distance="200px">
</ons-sliding-menu>

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
