/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../../../../../../typings/syonet/SyonetWork.d.ts" />

// webpackのloaderの機能でtitle.svgを呼び込む

import SuggesterTitleCtrl = require('../controllers/title');
require("!style!css!../../../../styleguide/postcss/tabbar/navigation/contents/suggester/title.css");

/**
 * sugggester-titleというCustomElement
 */
app.component("sugggesterTitle", {
    template: `
    <div ng-bind-html="$ctrl.titleSvg"></div>
    `,
    controller:SuggesterTitleCtrl.SuggesterTitleCtrl
});
