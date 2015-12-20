/// <reference path="../../../../../../../typings/angularjs/angular.d.ts" />
var app = angular.module('app',[]);
class HomeController {
 
    constructor(private $scope: HomeScope) {
        $scope.message = 'Home';
        
    }
}

interface HomeScope extends ng.IScope {
    message: string;
}
app.controller('HomeController', HomeController);