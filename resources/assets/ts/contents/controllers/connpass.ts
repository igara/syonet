/// <reference path="../../../../../typings/main.d.ts" />
/// <reference path="../interfaces/connpass.ts" />
/// <reference path="../services/connpass.ts" />

import connpassService = require('../services/connpass');
import connpassApiParams = require('../interfaces/connpass');

/**
 * Connpassを扱うコントローラ
 */
export class ConnpassCtrl {
    // Http通信を扱うサービス
    http:ng.IHttpService;
    // locationを扱うサービス
    locationService:ng.ILocationService;
    // JSONデータを扱う
    getJson:any;
    // Math関数
    Math:Math;
    // ConnpassService
    connpassService:connpassService.ConnpassService;
    // ConnpassAPIで使用されるparam
    connpassApiParams:connpassApiParams.ConnpassApiParams;

    /**
     * コンストラクタ
     */
    constructor($http: ng.IHttpService, $location:ng.ILocationService) {
        this.http = $http;
        this.locationService = $location;
        this.Math = Math;
        this.connpassService = new connpassService.ConnpassService();

        this.connpassApiParams = {
            keyword:this.connpassService.getKeywordParam(this.locationService),
            year:this.connpassService.getYearParam(this.locationService),
            month:this.connpassService.getMonthParam(this.locationService),
            start:this.connpassService.getPageInfo(this.locationService).start,
            count:this.connpassService.getPageInfo(this.locationService).count
        };

        var callConnpassApi = this.connpassService.callConnpassApiJson(this.http, this.connpassApiParams);
        callConnpassApi.success((data, status) => {
            this.getJson = data;
        }).error(error => {
            this.getJson = error;
        });
    }
}