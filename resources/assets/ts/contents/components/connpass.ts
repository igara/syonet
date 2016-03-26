/// <reference path="../../../../../typings/main.d.ts" />
/// <reference path="../controllers/connpass.ts" />

import ConnpassCtrl = require('../controllers/connpass');

/**
 * connpass-eventというCustomElement
 */
app.component("connpassEvent", {
    templateUrl: '/tabbar/navigation/contents/it_connpass/list',
    controller: ConnpassCtrl.ConnpassCtrl
});
