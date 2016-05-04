/// <reference path="../../../../../../typings/main.d.ts" />

/**
 * SuggesterTutorialを扱うサービス
 */
export class SuggesterTutorialService {

    /**
     * ゲームの説明を表示する時の文言
     * ボタンが押された時のイベントリスナーで変更される文言も記載
     * @param $scope ng.IScope
     */
    getTutorialDialogContentChange($scope:ng.IScope) {
        window.addEventListener ("click", function (event) {
            if (event.srcElement.id === "tutorialButton") {
                $scope.$apply('$ctrl.getTutorialDialogContent = "このゲームの説明1"');
            } else if (event.srcElement.id === "tutorial-dialog-nextbutton") { 
                $scope.$apply('$ctrl.getTutorialDialogContent = "このゲームの説明1"');
            } else if (event.srcElement.id === "tutorial-dialog-backbutton") {
                $scope.$apply('$ctrl.getTutorialDialogContent = "このゲームの説明2"');
            }
        });
    }

    /**
     * 非表示・表示を行うイベントの登録を行う
     */
    showOrHideTutorialDialog() {
        window.addEventListener ("click", function (event) {
            // tutorialDialogのエレメントを取得する
            var tutorialDialogElement:any;
            tutorialDialogElement = document.getElementById('tutorial-dialog');
            var tutorialDialog:AlertDialogView;
            tutorialDialog = tutorialDialogElement;
            if (event.srcElement.id === "tutorialButton") {
                tutorialDialog.show();
            } else if (event.srcElement.id === "tutorial-dialog-closebutton") {
                tutorialDialog.hide();
            }
        });
    }

    /**
     * 次へ・戻るに切り替えを行うイベントの登録
     * @param $scope ng.IScope
     */
    nextButtonOrBackButton4TutorialDialog($scope:ng.IScope) {
        window.addEventListener ("click", function (event) {
            if (event.srcElement.id === "tutorialButton") {
                // 戻るのボタンを次へボタンに変更する
                $scope.$apply('$ctrl.getTutorialDialogSwitchButtonId = "tutorial-dialog-backbutton"');
                $scope.$apply('$ctrl.getTutorialDialogSwitchButtonText = "次へ"');
            } else if (event.srcElement.id === "tutorial-dialog-nextbutton") {
                // 戻るのボタンを次へボタンに変更する
                $scope.$apply('$ctrl.getTutorialDialogSwitchButtonId = "tutorial-dialog-backbutton"');
                $scope.$apply('$ctrl.getTutorialDialogSwitchButtonText = "次へ"');
            } else if (event.srcElement.id === "tutorial-dialog-backbutton") {
                // 次へボタンを戻るボタンに変更する
                $scope.$apply('$ctrl.getTutorialDialogSwitchButtonId = "tutorial-dialog-nextbutton"');
                $scope.$apply('$ctrl.getTutorialDialogSwitchButtonText = "戻る"');
            }
        });
    }
}