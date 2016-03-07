/// <reference path="../../../../../typings/main.d.ts" />
var app = angular.module('app', ['onsen']);

/**
 * [Common]
 */
class CommonController {
 
    /**
     * constructor
     * 
     * @param $scope DockListScope extends ng.IScope
     */
    constructor(private $scope: CommonScope) {        
        $scope.onClickedTab = () => {
            // タブバーの押下後のイベントリスナーを削除
            ons.findComponent("ons-tabbar").off('postchange');

            // タブバーの押下後のイベントリスナーを追加
            ons.findComponent("ons-tabbar").on('postchange', () => {
                angular.element(document.getElementById("saveTabberIndex")).val(ons.findComponent("ons-tabbar").getActiveTabIndex());
            });
        };
    }
}

/**
 * スコープのinterface 
 */
interface CommonScope extends ng.IScope {
    // タブ押下時のイベント
    onClickedTab: any;
}

app.controller('CommonController', CommonController);