/// <reference path="../../../../../../typings/main.d.ts" />

/**
 * SuggesterAlonegamePageを扱うサービス
 */
export class SuggesterAlonegamePageService {

    /**
     * 1人用ゲームの非表示を行うイベントの登録
     */
    hideAlonegamePage() {
        window.addEventListener ("click", function (event) {
            if (event.srcElement.id === "alonegame-closebutton") {
                suggesterNavigator.popPage();
            }
        });
    }
}