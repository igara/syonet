/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../services/alonegamedialog.ts" />

import suggesterAlonegameDialogService = require('../services/alonegamedialog');

/**
 * SuggesterAlonegameDialogを扱うコントローラ
 */
export class SuggesterAlonegameDialogCtrl {

    // SuggesterAlonegameDialogService
    suggesterAlonegameDialogService:suggesterAlonegameDialogService.SuggesterAlonegameDialogService;
    
    /**
     * コンストラクタ
     */
    constructor($scope:ng.IScope) {
        this.suggesterAlonegameDialogService = new suggesterAlonegameDialogService.SuggesterAlonegameDialogService();
        // 1人用ゲームの非表示・表示を行うイベントの登録
        this.suggesterAlonegameDialogService.showOrHideAlonegameDialog();
        this.suggesterAlonegameDialogService.gameStart();
    }
}