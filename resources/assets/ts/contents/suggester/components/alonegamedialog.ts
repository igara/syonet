/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../../../../../../typings/syonet/SyonetWork.d.ts" />

import suggesterAlonegameDialogCtrl = require('../controllers/alonegamedialog');

/**
 * sugggester-alonegame-dialogというCustomElement
 */
app.component("sugggesterAlonegameDialog", {
    template: `
<ons-alert-dialog id="alone-game-dialog">
    <div class="alert-dialog-title">1人モード</div>
    <div class="alert-dialog-content" id="alonegame-dialog-content">
        スタートを押すとゲーム開始します。
    </div>
    <div class="alert-dialog-footer">
        <button id="alone-game-dialog-closebutton" class="alert-dialog-button">閉じる</button>
        <button id="alone-game-dialog-startbutton" class="alert-dialog-button">スタート</button>
    </div>
</ons-alert-dialog>
    `,
    controller: suggesterAlonegameDialogCtrl.SuggesterAlonegameDialogCtrl
});