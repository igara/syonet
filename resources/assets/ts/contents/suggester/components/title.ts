/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../../../../../../typings/syonet/SyonetWork.d.ts" />

// webpackのloaderの機能でtitle.svgを呼び込む
var titleSvg = require("url?mimetype=image/svg+xml!../../../../img/svg/suggester/title.svg");

/**
 * sugggester-titleというCustomElement
 */
app.component("sugggesterTitle", {
    template: `
<object type="image/svg+xml" data="` + titleSvg + `">
    
    
    
    `
});
