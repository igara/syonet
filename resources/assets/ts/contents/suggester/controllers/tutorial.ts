/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../services/tutorial.ts" />

import suggesterTutorialService = require('../services/tutorial');

/**
 * SuggesterTutorialを扱うコントローラ
 */
export class SuggesterTutorialCtrl {

    // SuggesterTutorialService
    suggesterTutorialService:suggesterTutorialService.SuggesterTutorialService;
    
    /**
     * コンストラクタ
     */
    constructor($scope:ng.IScope) {
        this.suggesterTutorialService = new suggesterTutorialService.SuggesterTutorialService();
        // ゲームの説明の変更を行うイベントの登録
        this.suggesterTutorialService.getTutorialDialogContentChange($scope);
        // tutorialの非表示・表示を行うイベントの登録
        this.suggesterTutorialService.showOrHideTutorialDialog();
        // 次へ・戻るのボタン表示の切り替えを行うイベントの登録
        this.suggesterTutorialService.nextButtonOrBackButton4TutorialDialog($scope);
    }
}