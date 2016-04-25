/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../../../../../../typings/syonet/SyonetWork.d.ts" />
/// <reference path="../components/title.ts" />

/**
 * SuggesterTitleを扱うコントローラ
 */
export class SuggesterTitleCtrl {
    
    titleSvg:any;

    /**
     * コンストラクタ
     */
    constructor($sce:ng.ISCEService) {
        this.titleSvg = $sce.trustAsHtml(require("html!../../../../img/svg/suggester/title.svg"));
    }
}