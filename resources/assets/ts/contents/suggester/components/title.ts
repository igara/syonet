/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../../../../../../typings/syonet/SyonetWork.d.ts" />

import SuggesterTitleCtrl = require('../controllers/title');

/**
 * sugggester-titleというCustomElement
 */
app.component("sugggesterTitle", {
    template: `
    <div ng-bind-html="$ctrl.titleSvg"></div>
    `,
    controller:SuggesterTitleCtrl.SuggesterTitleCtrl
});