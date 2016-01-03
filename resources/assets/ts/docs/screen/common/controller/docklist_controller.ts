/// <reference path="../../../../../../../typings/angularjs/angular.d.ts" />
/// <reference path="../../../../../../../typings/onsenui/onsenui.d.ts" />
/// <reference path="../../../../../../../typings/marked/marked.d.ts" />
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
    constructor(private $scope: DockListScope, private $sce: DockListSceService, private $http: DockListHttpService) {
        $scope.homeContent = $sce.trustAsHtml('home');
        $scope.commentsContent = $sce.trustAsHtml('comments');

        $http({
            method: 'GET',
            url: '/docs/screen/readme.md'
        }).then(function successCallback(response) {
            // markdownの内容をHTMLにパースさせる。
            $scope.docsContent = $sce.trustAsHtml(marked(String(response.data)));
        }, function errorCallback(response) {
            $scope.docsContent = $sce.trustAsHtml('読み込みエラー!/docs/screen/readme.mdが設置されておりません。');
        });

        $scope.devContent = $sce.trustAsHtml(``);
        
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

    // タブ押下時のイベント
    onClickedTab: any;
}

/**
 * SCEサービスのinterface
 */
interface DockListSceService extends ng.ISCEService {
}

/**
 * HTTPサービスのinterface
 */
interface DockListHttpService extends ng.IHttpService {
}

app.controller('DockListController', DockListController);