/// <reference path="../../../../../typings/angularjs/angular.d.ts" />
/// <reference path="../../../../../typings/onsenui/onsenui.d.ts" />
/// <reference path="../../../../../typings/marked/marked.d.ts" />
var app = angular.module('app', ['onsen']);

/**
 * [Common]
 */
class CommonController {
 
    /**
     * constructor
     * 
     * @param $scope DockListScope extends ng.IScope
     * @param $location DockListLocation extends ng.ILocationService
     * @param $sce DockListSceProvider extends ng.ISCEService
     */
    constructor(private $scope: CommonScope, private $sce: CommonSceService, private $http: CommonHttpService) {
        $scope.homeContent = $sce.trustAsHtml('home');
        $scope.contentsContent = $sce.trustAsHtml('contents');
        $scope.docsContent = $sce.trustAsHtml(`docs`);
        $scope.devContent = $sce.trustAsHtml(`dev`);
        
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
    // タブバーのhomeのページ内容
    homeContent: string;

    // タブバーのcommentsのページ内容
    contentsContent: string;

    // タブバーのdocsのページ内容
    docsContent: string;

    // タブバーのdevのページ内容
    devContent: string;

    // タブ押下時のイベント
    onClickedTab: any;
}

/**
 * SCEサービスのinterface
 */
interface CommonSceService extends ng.ISCEService {
}

/**
 * HTTPサービスのinterface
 */
interface CommonHttpService extends ng.IHttpService {
}

app.controller('CommonController', CommonController);