/// <reference path="../../../../../../../typings/angularjs/angular.d.ts" />
/// <reference path="../../../../../../../typings/onsenui/onsenui.d.ts" />
var app = angular.module('app', ['onsen']);

/**
 * [Docks]
 * screen:docklist
 */
class DockListController {
 
    /**
     * constructor
     * 
     * @param $scope DockListScope extends ng.IScope
     * @param $location DockListLocation extends ng.ILocationService
     * @param $sce DockListSceProvider extends ng.ISCEService
     */
    constructor(private $scope: DockListScope, private $location: DockListLocation, private $sce: DockListSceProvider) {
        ons.findComponent
        $scope.homeContent = $sce.trustAsHtml('home');
        $scope.commentsContent = $sce.trustAsHtml('comments');
        $scope.docsContent = $sce.trustAsHtml('docs');
        $scope.devContent = $sce.trustAsHtml(`
        <li><a href="https://ide.c9.io/igara/slack_rack_php" target="_blank">Cloud9</a></li>
        <li><a href="http://syonet.work:8080/ide.html" target="_blank">SyoNet環境上のCloud9</a></li>
        <li><a href="https://syonet.work:1337/" target="_blank">vorlon</a></li>
        <li><a href="https://github.com/igara/syonet/" target="_blank">SyoNetのソース</a></li>
        `);
        $scope.hostName = $location.host;

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
interface DockListScope extends ng.IScope {
    // タブバーのhomeのページ内容
    homeContent: string;

    // タブバーのcommentsのページ内容
    commentsContent: string;

    // タブバーのdocsのページ内容
    docsContent: string;

    // タブバーのdevのページ内容
    devContent: string;

    // ホスト名
    hostName: any;

    // タブ押下時のイベント
    onClickedTab: any;
}

/**
 * ローケションのサービスのinterface
 */
interface DockListLocation extends ng.ILocationService {
}

/**
 * SCEサービスのinterface
 */
interface DockListSceProvider extends ng.ISCEService {
}

app.controller('DockListController', DockListController);