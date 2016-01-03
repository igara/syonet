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
    constructor(private $scope: DockListScope, private $location: DockListLocationService, private $sce: DockListSceService, private $http: DockListHttpService) {
        $scope.homeContent = $sce.trustAsHtml('home');
        $scope.commentsContent = $sce.trustAsHtml('comments');
        $scope.docsContent = $sce.trustAsHtml(`docs`);
        $scope.devContent = $sce.trustAsHtml(``);
        $scope.hostName = $location.host;
        
        $scope.onClickedTab = () => {
            // タブバーの押下後のイベントリスナーを削除
            ons.findComponent("ons-tabbar").off('postchange');

            // タブバーの押下後のイベントリスナーを追加
            ons.findComponent("ons-tabbar").on('postchange', () => {
                angular.element(document.getElementById("saveTabberIndex")).val(ons.findComponent("ons-tabbar").getActiveTabIndex());
            });
        }; 
        this.getDocsList($http);
    }
    
    getDocsList($http: DockListHttpService) {
        $http({
            method: 'GET',
            url: 'http://localhost:8000/docs/screen/docs_list/design/design_success.html'
        }).then(function successCallback(response) {
            // this callback will be called asynchronously
            // when the response is available
            alert(response);
            alert('成功');
        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
            alert(response);
            alert('失敗');
        });
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
interface DockListLocationService extends ng.ILocationService {
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