/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../../../../../../typings/syonet/SyonetWork.d.ts" />

import SuggesterTutorialCtrl = require('../controllers/tutorial');

/**
 * sugggester-tutorialというCustomElement
 */
app.component("sugggesterTutorial", {
    template: `
<ons-alert-dialog id="tutorial-dialog">
    <div class="alert-dialog-title">チュートリアル</div>
    <div class="alert-dialog-content" id="tutorial-dialog-content">
        {{$ctrl.getTutorialDialogContent}}
    </div>
    <div class="alert-dialog-footer">
        <button id="tutorial-dialog-closebutton" class="alert-dialog-button">閉じる</button>
        <button id="{{$ctrl.getTutorialDialogSwitchButtonId}}" class="alert-dialog-button">
            {{$ctrl.getTutorialDialogSwitchButtonText}}
        </button>
    </div>
</ons-alert-dialog>
    `,
    controller:SuggesterTutorialCtrl.SuggesterTutorialCtrl
});