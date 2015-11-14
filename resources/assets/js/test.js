/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

const classNameContent = 'content'; //HTMLのクラス要素名「content」 // 2.クラス

class UnitModule {
    /**
     * 共通で使いたい系 // 1.クラス
     */

    alertTime(time)
    {
        /**
         * paramの時間をalertで表示する。
         *
         * @param Date
         * @return void
         */
        // 3.テンプレート文字列
        alert(`設定されている時間は${time}`);
    }

}
var classUnitModule = new UnitModule();

class TopMenuView {
    /**
     * TopページのMenuを扱うクラス
     */

    onClickHOME()
    {
        /**
         * メニューにあるHOMEをクリックした時
         *
         * @param void
         * @return void
         */

        // [content]というクラス属性値の要素を取得する
        var elements = document.getElementsByClassName(classNameContent);
        elements[0].innerHTML = '<div class="title">Laravel 5</div>';
    }

    onClickPHPInfo()
    {
        /**
         * メニューにあるPHPINFOをクリックした時
         *
         * @param void
         * @return void
         */

        // [content]というクラス属性値の要素を取得する
        var elements = document.getElementsByClassName(classNameContent);
        elements[0].innerHTML = '<iframe src="https://192.168.43.98:8080/debug/phpinfo"></iframe>';
    }

    onClickDisAppear()
    {
        /**
         * メニューにあるDISAPPEARをクリックした時
         *
         * @param void
         * @return void
         */

        // [content]というクラス属性値の要素を取得する
        var elements = document.getElementsByClassName(classNameContent);
        elements[0].innerHTML = '';
    }

    onClickWeather()
    {
        /**
         * メニューにあるDISAPPEARをクリックした時
         *
         * @param void
         * @return void
         */
        var url = 'http://192.168.43.109:8000/slack/channelistjson/';
        var callback = {
            success : function(data){
                console.log(1, 'success', JSON.parse(data));
            },
            error : function(data){
                console.log(2, 'error', JSON.parse(data));
            }
        };
        // A small example of object
        var core = {

            // Method that performs the ajax request
            ajax : function (method, url, args)
            {

                // Creating a promise
                var promise = new Promise( function (resolve, reject)
                {

                    // Instantiates the XMLHttpRequest
                    var client = new XMLHttpRequest();
                    var uri = url;

                    if (args && (method === 'POST' || method === 'PUT')) {
                        uri += '?';
                        var argcount = 0;
                        for (var key in args) {
                            if (args.hasOwnProperty(key)) {
                                if (argcount++) {
                                    uri += '&';
                                }
                                uri += encodeURIComponent(key) + '=' + encodeURIComponent(args[key]);
                            }
                        }
                    }

                    client.open(method, uri);
                    client.send();

                    client.onload = function ()
                    {
                        if (this.status == 200) {
                            // Performs the function "resolve" when this.status is equal to 200
                            resolve(this.response);
                            alert("iiii");
                        } else {
                            alert("iiii");
                            // Performs the function "reject" when this.status is different than 200
                            reject(this.statusText);
                        }
                    };
                    client.onerror = function ()
                    {
                        alert("iiii");
                        reject(this.statusText);
                    };
                });

                // Return the promise
                return promise;
            }
        };

        // Adapter pattern
        return {
            'get' : function(args)
            {
                alert("iiii");
                return core.ajax('GET', url, args);
            },
            'post' : function(args)
            {
                return core.ajax('POST', url, args);
            },
            'put' : function(args)
            {
                return core.ajax('PUT', url, args);
            },
            'delete' : function(args)
            {
                return core.ajax('DELETE', url, args);
            }
        };

        // [content]というクラス属性値の要素を取得する
        //var elements = document.getElementsByClassName(classNameContent);
        //elements[0].innerHTML = '';
    }
}
var classTopMenuView = new TopMenuView();

class AmpMenuView {
    /**
     * TopページのAMPのプルダウンの処理を扱う
     */

    onClickNowTime()
    {
        /**
         * NOWTIMEをクリックした時
         *
         * @param void
         * @return void
         */
        classUnitModule.alertTime(new Date());
    }
}
var classAmpMenuView = new AmpMenuView();

class SumMenuView {
    /**
     * TopページのSumのプルダウンの処理を扱う
     */

    onClickCalc(...args)
    {
        /**
         * クリックした時
         *
         * @param args 複数の数値 // 3.可変長引数
         * @return void
         */
        // [content]というクラス属性値の要素を取得する
        var elements = document.getElementsByClassName(classNameContent);
















































        elements[0].innerHTML = `<div class="title">${args} = ${args.reduce((a, b) => a + b)}</div>`;
    }
}
var classSumMenuView = new SumMenuView();
