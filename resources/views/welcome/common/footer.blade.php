<ons-template id="tabbar.html">
    <ons-tabbar var="tabbar">
  	  <ons-tab page="home.html" label="Home" icon="ion-home" active="true"></ons-tab>
      <ons-tab page="comments.html" label="Comments" icon="ion-chatbox-working"></ons-tab>
      <ons-tab page="tags.html" label="Tags" icon="ion-ios-pricetag"></ons-tab>
      <ons-tab page="settings.html" label="Settings" icon="ion-ios-cog">
    </ons-tab>
  </ons-tabbar>
</ons-template>

<ons-template id="home.html">
  <ons-page>
    <ons-toolbar>
      <div class="left">
        <ons-toolbar-button ng-click="menu.toggleMenu()">
          <ons-icon icon="bars"></ons-icon>
        </ons-toolbar-button>
      </div>
      <div class="center">SyoNet</div>
    </ons-toolbar>
    <p style="text-align: center; color: #999; padding-top: 50px;">
      Home
    </p>
  </ons-page>
</ons-template>

<ons-template id="comments.html">
  <ons-page>
    <ons-toolbar>
      <div class="left">
        <ons-toolbar-button ng-click="menu.toggleMenu()">
          <ons-icon icon="bars"></ons-icon>
        </ons-toolbar-button>
      </div>
      <div class="center">SyoNet</div>
    </ons-toolbar>
    <p style="text-align: center; color: #999; padding-top: 50px;">
      Comments
    </p>
  </ons-page>
</ons-template>

<ons-template id="tags.html">
  <ons-page>
    <ons-toolbar>
      <div class="left">
        <ons-toolbar-button ng-click="menu.toggleMenu()">
          <ons-icon icon="bars"></ons-icon>
        </ons-toolbar-button>
      </div>
      <div class="center">SyoNet</div>
    </ons-toolbar>
    <p style="text-align: center; color: #999; padding-top: 50px;">
      Tags
    </p>
  </ons-page>
</ons-template>

<ons-template id="settings.html">
  <ons-page>
    <ons-toolbar>
      <div class="left">
        <ons-toolbar-button ng-click="menu.toggleMenu()">
          <ons-icon icon="bars"></ons-icon>
        </ons-toolbar-button>
      </div>
      <div class="center">SyoNet</div>
    </ons-toolbar>
    <p style="text-align: center; color: #999; padding-top: 50px;">
      Setting
    </p>
  </ons-page>
</ons-template>
