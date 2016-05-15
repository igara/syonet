/// <reference path="../../../../../../typings/main.d.ts" />

/**
 * SuggesterAlonegameDialogを扱うサービス
 */
export class SuggesterAlonegameDialogService {

    /**
     * 非表示・表示を行うイベントの登録を行う
     */
    showOrHideAlonegameDialog() {
        window.addEventListener ("click", function (event) {
            // alonegameDialogのエレメントを取得する
            var alonegameDialogElement:any;
            alonegameDialogElement = document.getElementById('alone-game-dialog');
            var alonegameDialog:AlertDialogView;
            alonegameDialog = alonegameDialogElement;
            // eventのsrcElementを取得する
            var eventTarget:any;
            eventTarget = event.target;
            var eventSrcElement:Element;
            eventSrcElement = eventTarget;
            if (eventSrcElement.id === "alonegameButton") {
                alonegameDialog.show();
            } else if (eventSrcElement.id === "alone-game-dialog-closebutton") {
                alonegameDialog.hide();
            }
        });
    }
    /**
     * ゲームをスタートした時
     */
    gameStart() {
        window.addEventListener ("click", function (event) {
            // eventのsrcElementを取得する
            var eventTarget:any;
            eventTarget = event.target;
            var eventSrcElement:Element;
            eventSrcElement = eventTarget;
            if (eventSrcElement.id === "alone-game-dialog-startbutton") {
                suggesterNavigator.pushPage('alonegame.html');
            }
        });
    }

}