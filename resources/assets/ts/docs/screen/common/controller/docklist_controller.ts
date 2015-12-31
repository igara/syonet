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
     * @param $scope 
     */
    constructor(private $scope: DockListScope, private $location: DockListLocation, private $sce: DockListSceProvider) {
        ons.findComponent
        $scope.homeContent = $sce.trustAsHtml('home');
        $scope.commentsContent = $sce.trustAsHtml('comments');
        $scope.docsContent = $sce.trustAsHtml('docs');
        $scope.settingsContent = $sce.trustAsHtml('settings');
        $scope.hostName = $location.host;
        $scope.onClickedTab = () => {
            ons.findComponent("ons-tabbar").off('postchange');
            ons.findComponent("ons-tabbar").on('postchange', () => {
                angular.element(document.getElementById("saveTabberIndex")).val(ons.findComponent("ons-tabbar").getActiveTabIndex());
            });
        }; 
    }
}

interface DockListScope extends ng.IScope {
    homeContent: string;
    commentsContent: string;
    docsContent: string;
    settingsContent: string;
    hostName: any;
    onClickedTab: any;
}

interface DockListLocation extends ng.ILocationService {
}

interface DockListSceProvider extends ng.ISCEService {
}

app.controller('DockListController', DockListController);