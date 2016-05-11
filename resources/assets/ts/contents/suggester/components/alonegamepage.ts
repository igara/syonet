/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../../../../../../typings/syonet/SyonetWork.d.ts" />

import suggesterAlonegamePageCtrl = require('../controllers/alonegamepage');

/**
 * sugggester-alonegame-pageというCustomElement
 */
app.component("sugggesterAlonegamePage", {
    template: `
<ons-page>
    <p style="text-align: center">
        <ons-button modifier="light" id="alonegame-closebutton" onclick="suggesterNavigator.popPage();">
            ゲームを中断する
        </ons-button>
    </p>
</ons-page>
    `,
    controller: suggesterAlonegamePageCtrl.SuggesterAlonegamePageCtrl
});