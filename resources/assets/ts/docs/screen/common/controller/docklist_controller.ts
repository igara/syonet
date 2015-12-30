/// <reference path="../../../../../../../typings/angularjs/angular.d.ts" />
var app = angular.module('app', ['onsen']);
class DockListController {
 
    constructor(private $scope: DockListScope, private $location: DockListLocation) {
        $scope.homeContent = 'Home';
        $scope.commentsContent = 'comments';
        $scope.docsContent = 'docs';
        $scope.settingsContent = 'settings';
        $scope.hostName = $location.host;
    }
}

interface DockListScope extends ng.IScope {
    homeContent: string;
    commentsContent: string;
    docsContent: string;
    settingsContent: string;
    hostName: any;
}

interface DockListLocation extends ng.ILocationService {
}
app.controller('DockListController', DockListController);