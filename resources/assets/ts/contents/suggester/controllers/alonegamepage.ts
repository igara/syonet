/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../services/alonegamepage.ts" />

import suggesterAlonegamePageService = require('../services/alonegamepage');

/**
 * SuggesterAlonegamePageを扱うコントローラ
 */
export class SuggesterAlonegamePageCtrl {

    // SuggesterAlonegamePageService
    suggesterAlonegamePageService:suggesterAlonegamePageService.SuggesterAlonegamePageService;
    
    /**
     * コンストラクタ
     */
    constructor($scope:ng.IScope) {
        this.suggesterAlonegamePageService = new suggesterAlonegamePageService.SuggesterAlonegamePageService();

    }
}