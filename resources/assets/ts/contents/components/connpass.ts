/// <reference path="../../../../../typings/main.d.ts" />
/// <reference path="../../../../../typings/syonet/SyonetWork.d.ts" />

/**
 * Connpassを扱うコントローラ
 */
class ConnpassCtrl {
    // Http通信を扱うサービス
    http: ng.IHttpService;
    // locationを扱うサービス
    locationService:ng.ILocationService;
    // JSONデータを扱う
    getJson: any;
    // 年月を取得する 
    year:any;
    month:any;
    // 検索開始位置
    start:any;
    // 検索出力数
    count:any;
    // キーワード
    keyword:any;

    /**
     * コンストラクタ
     */
    constructor($http: ng.IHttpService, $location:ng.ILocationService) {
        this.http = $http;
        this.locationService = $location;

        // 年月を取得する 
        this.year = this.getYear();
        this.month = this.getMonth();
        // 検索開始位置
        this.start = this.getStart();
        // 検索出力数
        this.count = this.getCount();
        
        // URLパラメータから検索ワードを取得する
        this.keyword = this.getKeyword();

        this.callConnpassApiJson(this.keyword, this.year, this.month, this.start, this.count);
    }

    /**
     * ConnpassAPIから情報を取得する
     */
    callConnpassApiJson(keyword:string, year:string, month:string, start:string, count:string) {
        this.http.jsonp(`//connpass.com/api/v1/event/?keyword=${keyword}&count=${count}&start=${start}&ym${year}${month}&callback=JSON_CALLBACK`)
        .success((data, status) => {
            this.getJson = data;
        }).error(error => {
            this.getJson = error;
        });
    }

    /**
     * 検索する時の年を取得する
     * @return number 年
     */
    getYear() {
        // URLパラメータから年を取得する
        var year = this.locationService.search(location.search).search()["year"];
        // パラメータのyearがundefinedもしくは数字ではない場合今年
        if (year === "" || year === undefined || !isFinite(year)) {
            year = new Date().getFullYear();
        }
        return year;
    }

    /**
     * 検索する時の月を取得する
     * @return number 月
     */
    getMonth() {
        // URLパラメータから月を取得する
        var month = this.locationService.search(location.search).search()["month"];
        // パラメータのmonthがundefinedもしくは数字ではない場合今月
        if (month === "" || month === undefined || !isFinite(month)) {
            month = new Date().getMonth() + 1;
            // 1桁の場合0埋めをする
            if (month.length === 1) {
                month = "0" + month;
            }
        }
        return month;
    }

    /**
     * 検索する時の検索開始位置を取得する
     * @return number 検索開始位置
     */
    getStart() {
        // URLパラメータから検索開始位置を取得する
        var start = this.locationService.search(location.search).search()["start"];
        // パラメータのstartがundefinedもしくは数字ではない場合1
        if (start === undefined || !isFinite(start)) {
            start = 1;
        }
        return start;
    }

    /**
     * 検索する時の検索開出力数を取得する
     * @return number 検索開出力数
     */
    getCount() {
        // URLパラメータから検索出力数を取得する
        var count = this.locationService.search(location.search).search()["count"];
        // パラメータのcountがundefinedもしくは数字ではない場合20
        if (count === undefined || !isFinite(count)) {
            count = 20;
        }
        return count;
    }

    /**
     * 検索する時のキーワードを取得する
     * @return string キーワード
     */
    getKeyword() {
        return this.locationService.search(location.search).search()["keyword"];
    }
}

/**
 * connpass-eventというCustomElement
 */
app.component("connpassEvent", {
    templateUrl: '/tabbar/navigation/contents/it_connpass/list',
    controller: ConnpassCtrl
});
