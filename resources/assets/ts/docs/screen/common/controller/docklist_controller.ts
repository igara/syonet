/// <reference path="../../../../../../../typings/angularjs/angular.d.ts" />
var app = angular.module('app', ['onsen']);
class DockListController {
 
    constructor(private $scope: DockListScope) {
        $scope.homeContent = 'Home';
        $scope.commentsContent = 'comments';
        $scope.tagsContent = 'tags';
        $scope.settingsContent = 'settings';
    }
}

interface DockListScope extends ng.IScope {
    homeContent: string;
    commentsContent: string;
    tagsContent: string;
    settingsContent: string;
}
app.controller('DockListController', DockListController);