/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../interfaces/connpass.ts" />

import connpassApiParams = require('../interfaces/connpass');

/**
 * Connpassを扱うサービス
 */
export class ConnpassService {
    /**
     * 検索する時の年を取得する
     * @param ng.ILocationService locationService
     * @return number 年
     */
    getYearParam(locationService:ng.ILocationService) {
        // URLパラメータから年を取得する
        var year = locationService.search(location.search).search()["year"];
        // パラメータのyearがundefinedもしくは数字ではない場合今年
        if (year === "" || year === undefined || !isFinite(year)) {
            year = new Date().getFullYear();
        }
        return year;
    }

    /**
     * 検索する時の月を取得する
     * @param ng.ILocationService locationService
     * @return number 月
     */
    getMonthParam(locationService:ng.ILocationService) {
        // URLパラメータから月を取得する
        var month = locationService.search(location.search).search()["month"];
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
     * @param ng.ILocationService locationService
     * @return number 検索開始位置
     */
    getStartParam(locationService:ng.ILocationService) {
        // URLパラメータから検索開始位置を取得する
        var start = locationService.search(location.search).search()["start"];
        // パラメータのstartがundefinedもしくは数字ではない場合1
        if (start === undefined || !isFinite(start)) {
            start = 1;
        }
        return start;
    }

    /**
     * 検索する時の検索出力数を取得する
     * @param ng.ILocationService locationService
     * @return number 検索出力数
     */
    getCountParam(locationService:ng.ILocationService) {
        // URLパラメータから検索出力数を取得する
        var count = locationService.search(location.search).search()["count"];
        // パラメータのcountがundefinedもしくは数字ではない場合20
        if (count === undefined || !isFinite(count)) {
            count = 20;
        }
        return count;
    }

    /**
     * ページを取得する
     * @param ng.ILocationService locationService
     * @return number ページ
     */
    getPageParam(locationService:ng.ILocationService) {
        // URLパラメータから検索開始位置を取得する
        var page = locationService.search(location.search).search()["page"];
        // パラメータのstartがundefinedもしくは数字ではない場合1
        if (page === undefined || !isFinite(page)) {
            page = 1;
        }
        return page;
    }

    /**
     * ページに対する情報を取得する
     * @param ng.ILocationService locationService
     * @return {
     *     'start':number 検索結果の読み込み開始位置,
     *     'count':number 読み込む検索結果の件数
     * }
     */
    getPageInfo(locationService:ng.ILocationService) {
        var start = this.getStartParam(locationService);
        var pageParam = this.getPageParam(locationService);
        var countParam = this.getCountParam(locationService);
        if (pageParam > 1) {
            start = (pageParam - 1) * countParam + 1;
        }
        return {
            'start':start,
            'count':countParam
        };
    }

    /**
     * 検索する時のキーワードを取得する
     * @param ng.ILocationService locationService
     * @return string キーワード
     */
    getKeywordParam(locationService:ng.ILocationService) {
        return locationService.search(location.search).search()["keyword"];
    }

    /**
     * 日付のフォーマットを適応した日付を取得する
     * @param any 日付
     * @return string 'XXXX/XX/XX XX:XX:XX'
     */
    getFormatedDate(dataTime:any) {
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

    /**
     * ConnpassAPIから情報を取得する
     * @param ng.IHttpService http,
     *        ConnpassApiParams connpassApiParams ConnpassAPIに問い合わせるときに用いるparam
     * @return http.jsonp APIのレスポンス
     */
    callConnpassApiJson(http:ng.IHttpService, connpassApiParams:connpassApiParams.ConnpassApiParams) {
        return http.jsonp(`//connpass.com/api/v1/event/?keyword=${connpassApiParams.keyword}&count=${connpassApiParams.count}&start=${connpassApiParams.start}&ym=${connpassApiParams.year}${connpassApiParams.month}&callback=JSON_CALLBACK`);
    }
}