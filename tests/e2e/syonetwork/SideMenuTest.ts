/// <reference path="../../../typings/main.d.ts" />
/// <reference path="../BrowserSetting.ts" />
/// <reference path="../SyonetWork.d.ts" />

import * as assert from 'power-assert';
import browserSetting = require('../BrowserSetting');
import fs = require('fs');

// テストを行うページのURL
const url = 'http://localhost:8000/';

// スリープさせる時間を取得
const sleepTime = browserSetting.getSleepTime();
// ブラウザのサイズを取得
const browserSize = browserSetting.getBrowserSize();
// 画面全体を取得する
const body:any = element(by.css('body'));

/**
 * サイドメニューテストクラス
 */
class SideMenuTest {

    /**
     * コンストラクタ
     */
    constructor() {
        
    }

    /**
     * サイドメニューの表示のテスト
     */
    dispSideMenuTest() {
        describe('サイドメニュー表示のテスト', function () {
            it(`右にスワイプしてサイドメニューを表示させたあと、
            左にスワイプしてサイドメニューを非表示にさせる`, function (done) {
                // ブラウザのサイズを設定
                browser.manage().window().setSize(browserSize.width, browserSize.height);
                // Webページへアクセスする
                browser.get(url);
                // Angularによるレンダリングを待機する
                browser.waitForAngular();
                // テスト開始時、スリープさせる
                browser.sleep(sleepTime);

                // 右にスワイプする
                browser.actions()
                .mouseMove(body, {x:browserSize.width / 2, y:browserSize.height / 2})
                .mouseDown()
                .mouseMove(body, {x:browserSize.width, y:browserSize.height / 2})
                .mouseUp()
                .perform();

                // ブラウザ内のJavaScriptを実行させる
                browser.executeAsyncScript(function() {
                    var callback = arguments[arguments.length - 1];
                    callback(menu.isMenuOpened());
                }).then(function(isMenu) {
                    assert.default(
                        isMenu === true,
                        'error:サイドメニューが開かれていない');
                    // スリープさせる
                    browser.sleep(sleepTime);
                    // スクリーンショットを取る
                    browser.takeScreenshot().then(function(data) {
                        fs.writeFile(
                            'screenshot/syonetwork/OpenedSideMenu.png',
                            data.replace(/^data:image\/png;base64,/,''), 
                            'base64',
                            function(error) {
                                if(error) throw error;
                            }
                        );
                    });
                });

                // 左にスワイプする
                browser.actions()
                .mouseMove(body, {x:browserSize.width / 2, y:200})
                .mouseDown()
                .mouseMove(body,{x:-browserSize.width, y:200})
                .mouseUp()
                .perform();
                // ブラウザ内のJavaScriptを実行させる
                browser.executeAsyncScript(function() {
                    var callback = arguments[arguments.length - 1];
                    callback(menu.isMenuOpened());
                }).then(function(isMenu) {
                    assert.default(
                        isMenu === false,
                        'error:サイドメニューが開かれたままになっている');
                    // スリープさせる
                    browser.sleep(sleepTime);
                    // スクリーンショットを取る
                    browser.takeScreenshot().then(function(data) {
                        fs.writeFile(
                            'screenshot/syonetwork/ClosedSideMenu.png',
                            data.replace(/^data:image\/png;base64,/,''), 
                            'base64',
                            function(error) {
                                if(error) throw error;
                            }
                        );
                    });
                    done();
                });
                
            });
        });
    }
}

var sideMenuTest = new SideMenuTest();

// サイドメニューの表示テストの実行
sideMenuTest.dispSideMenuTest();