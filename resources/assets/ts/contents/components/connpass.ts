/// <reference path="../../../../../typings/main.d.ts" />

const connpass = angular.module("connpass", ['onsen']);

class ConnpassCtrl {
}

connpass.component("connpassEvent", {
  template: `aaaa`,
  controller: ConnpassCtrl
});

angular.bootstrap(document.body, [connpass.name]);