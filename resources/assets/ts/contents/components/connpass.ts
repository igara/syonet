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
    getJson:any;
    // 年月を取得する 
    yearParam:any;
    monthParam:any;
    // 検索開始位置
    startParam:any;
    // 検索出力数
    countParam:any;
    // ページ
    pageParam:any;
    // Math関数
    Math:Math;
    // キーワード
    keywordParam:any;

    /**
     * コンストラクタ
     */
    constructor($http: ng.IHttpService, $location:ng.ILocationService) {
        this.http = $http;
        this.locationService = $location;
        this.Math = Math;
        // 年月を取得する 
        this.yearParam = this.getYearParam();
        this.monthParam = this.getMonthParam();
        // 検索開始位置
        this.startParam = this.getStartParam();
        // 検索出力数
        this.countParam = this.getCountParam();
        // ページ
        this.pageParam = this.getPageParam();
        var start = this.getPageInfo().start;
        var count = this.getPageInfo().count;
        
        // URLパラメータから検索ワードを取得する
        this.keywordParam = this.getKeywordParam();

        this.callConnpassApiJson(this.keywordParam, this.yearParam, this.monthParam, start.toString(), count);
    }

    /**
     * ConnpassAPIから情報を取得する
     */
    callConnpassApiJson(keyword:string, year:string, month:string, start:string, count:string) {
        this.http.jsonp(`//connpass.com/api/v1/event/?keyword=${keyword}&count=${count}&start=${start}&ym=${year}${month}&callback=JSON_CALLBACK`)
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
    getYearParam() {
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
    getMonthParam() {
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
    getStartParam() {
        // URLパラメータから検索開始位置を取得する
        var start = this.locationService.search(location.search).search()["start"];
        // パラメータのstartがundefinedもしくは数字ではない場合1
        if (start === undefined || !isFinite(start)) {
            start = 1;
        }
        return start;
    }

    /**
     * 検索する時の検索出力数を取得する
     * @return number 検索出力数
     */
    getCountParam() {
        // URLパラメータから検索出力数を取得する
        var count = this.locationService.search(location.search).search()["count"];
        // パラメータのcountがundefinedもしくは数字ではない場合20
        if (count === undefined || !isFinite(count)) {
            count = 20;
        }
        return count;
    }
    /**
     * ページを取得する
     * @return number ページ
     */
    getPageParam() {
        // URLパラメータから検索開始位置を取得する
        var page = this.locationService.search(location.search).search()["page"];
        // パラメータのstartがundefinedもしくは数字ではない場合1
        if (page === undefined || !isFinite(page)) {
            page = 1;
        }
        return page;
    }
    /**
     * ページに対する情報を取得する
     * @return number ページの情報
     */
    getPageInfo() {
        var start = this.startParam;
        var count = this.countParam;
        if (this.pageParam > 1) {
            start = (this.pageParam - 1) * this.countParam + 1;
        }
        return {
            'start':start,
            'count':this.countParam
        };
    }

    /**
     * 検索する時のキーワードを取得する
     * @return string キーワード
     */
    getKeywordParam() {
        return this.locationService.search(location.search).search()["keyword"];
    }

    /**
     * 日付のフォーマットを適応した日付を取得する
     * @param any 日付
     * @return string 'XXXX/XX/XX XX:XX:XX'
     */
    getFormatedData(dataTime:any) {
        var date:Date = new Date(dataTime);
        // paramから年を取得する
        var year:any = date.getFullYear();
        // paramから月を取得する
        var month:any = date.getMonth() + 1;
        // paramから日を取得する
        var day:any = date.getDate();
        // paramから時を取得する
        var hh:any = date.getHours();
        // paramから分を取得する
        var mm:any = date.getMinutes();
        // paramから秒を取得する
        var ss:any = date.getSeconds();
        // 月が２桁にならない場合、0埋めする
        if (month < 10) {
            month = '0' + month;
        }
        // 日が２桁にならない場合、0埋めする
        if (day < 10) {
            day = '0' + day;
        }
        // 時が２桁にならない場合、0埋めする
        if (hh < 10) {
            hh = '0' + hh;
        }
        // 分が２桁にならない場合、0埋めする
        if (mm < 10) {
            mm = '0' + mm;
        }
        // 秒が２桁にならない場合、0埋めする
        if (ss < 10) {
            ss = '0' + ss;
        }
        return `${year}/${month}/${day} ${hh}:${mm}:${ss}`;
    }

    /**
     * 検索ヒット数を配列化し取得する
     * @param resultCount any 検索ヒット数
     * @return any arr 検索ヒット数（配列）
     */
    getCountArray(resultCount:any) {
        var arr:any = [];
        for (var i = 1; i <= resultCount; ++i) arr.push(i);
        return arr;
    }
}

/**
 * connpass-eventというCustomElement
 */
app.component("connpassEvent", {
    templateUrl: '/tabbar/navigation/contents/it_connpass/list',
    controller: ConnpassCtrl
});
