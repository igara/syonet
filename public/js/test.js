/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

'use strict';

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ('value' in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

var classNameContent = 'content'; //HTMLのクラス要素名「content」 // 2.クラス

var UnitModule = (function () {
    function UnitModule() {
        _classCallCheck(this, UnitModule);
    }

    _createClass(UnitModule, [{
        key: 'alertTime',

        /**
         * 共通で使いたい系 // 1.クラス
         */

        value: function alertTime(time) {
            /**
             * paramの時間をalertで表示する。
             *
             * @param Date
             * @return void
             */
            // 3.テンプレート文字列
            alert('設定されている時間は' + time);
        }
    }]);

    return UnitModule;
})();

var classUnitModule = new UnitModule();

var TopMenuView = (function () {
    function TopMenuView() {
        _classCallCheck(this, TopMenuView);
    }

    _createClass(TopMenuView, [{
        key: 'onClickHOME',

        /**
         * TopページのMenuを扱うクラス
         */

        value: function onClickHOME() {
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
    }, {
        key: 'onClickPHPInfo',
        value: function onClickPHPInfo() {
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
    }, {
        key: 'onClickDisAppear',
        value: function onClickDisAppear() {
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
    }, {
        key: 'onClickWeather',
        value: function onClickWeather() {
            /**
             * メニューにあるDISAPPEARをクリックした時
             *
             * @param void
             * @return void
             */
            var url = 'http://192.168.43.109:8000/slack/channelistjson/';
            var callback = {
                success: function success(data) {
                    console.log(1, 'success', JSON.parse(data));
                },
                error: function error(data) {
                    console.log(2, 'error', JSON.parse(data));
                }
            };
            // A small example of object
            var core = {

                // Method that performs the ajax request
                ajax: function ajax(method, url, args) {

                    // Creating a promise
                    var promise = new Promise(function (resolve, reject) {

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

                        client.onload = function () {
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
                        client.onerror = function () {
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
                'get': function get(args) {
                    alert("iiii");
                    return core.ajax('GET', url, args);
                },
                'post': function post(args) {
                    return core.ajax('POST', url, args);
                },
                'put': function put(args) {
                    return core.ajax('PUT', url, args);
                },
                'delete': function _delete(args) {
                    return core.ajax('DELETE', url, args);
                }
            };

            // [content]というクラス属性値の要素を取得する
            //var elements = document.getElementsByClassName(classNameContent);
            //elements[0].innerHTML = '';
        }
    }]);

    return TopMenuView;
})();

var classTopMenuView = new TopMenuView();

var AmpMenuView = (function () {
    function AmpMenuView() {
        _classCallCheck(this, AmpMenuView);
    }

    _createClass(AmpMenuView, [{
        key: 'onClickNowTime',

        /**
         * TopページのAMPのプルダウンの処理を扱う
         */

        value: function onClickNowTime() {
            /**
             * NOWTIMEをクリックした時
             *
             * @param void
             * @return void
             */
            classUnitModule.alertTime(new Date());
        }
    }]);

    return AmpMenuView;
})();

var classAmpMenuView = new AmpMenuView();

var SumMenuView = (function () {
    function SumMenuView() {
        _classCallCheck(this, SumMenuView);
    }

    _createClass(SumMenuView, [{
        key: 'onClickCalc',

        /**
         * TopページのSumのプルダウンの処理を扱う
         */

        value: function onClickCalc() {
            /**
             * クリックした時
             *
             * @param args 複数の数値 // 3.可変長引数
             * @return void
             */
            // [content]というクラス属性値の要素を取得する
            var elements = document.getElementsByClassName(classNameContent);

            for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
                args[_key] = arguments[_key];
            }

            elements[0].innerHTML = '<div class="title">' + args + ' = ' + args.reduce(function (a, b) {
                return a + b;
            }) + '</div>';
        }
    }]);

    return SumMenuView;
})();

var classSumMenuView = new SumMenuView();