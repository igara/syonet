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
// Homeタブを取得する
const homeTab = element(by.buttonText('Home'));
// Contentsタブを取得する
const contentsTab = element(by.buttonText('Contents'));
// Docsタブを取得する
const docsTab = element(by.buttonText('Docs'));
// Devタブを取得する
const devTab = element(by.buttonText('Dev'));

/**
 * タブバーテストクラス
 */
class TabbarTest {

    /**
     * コンストラクタ
     */
    constructor() {
        
    }

    /**
     * タブバー押下のテスト
     */
    clickTabbarTest() {
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
                // Contentsタブを押下する
                contentsTab.click();
                // ブラウザ内のJavaScriptを実行させる
                browser.executeAsyncScript(function() {
                    var callback = arguments[arguments.length - 1];
                    callback(tabbar.getActiveTabIndex());
                }).then(function(tabIndex) {
                    assert.default(
                        tabIndex === 1,
                        'error:Contentsタブが押下されていない');
                    // スリープさせる
                    browser.sleep(sleepTime);
                    // スクリーンショットを取る
                    browser.takeScreenshot().then(function(data) {
                        fs.writeFile(
                            'screenshot/syonetwork/ClickedContentsTab.png',
                            data.replace(/^data:image\/png;base64,/,''), 
                            'base64',
                            function(error) {
                                if(error) throw error;
                            }
                        );
                    });
                });
                // Docsタブを押下する
                docsTab.click();
                // ブラウザ内のJavaScriptを実行させる
                browser.executeAsyncScript(function() {
                    var callback = arguments[arguments.length - 1];
                    callback(tabbar.getActiveTabIndex());
                }).then(function(tabIndex) {
                    assert.default(
                        tabIndex === 2,
                        'error:Docsタブが押下されていない');
                    // スリープさせる
                    browser.sleep(sleepTime);
                    // スクリーンショットを取る
                    browser.takeScreenshot().then(function(data) {
                        fs.writeFile(
                            'screenshot/syonetwork/ClickedDocsTab.png',
                            data.replace(/^data:image\/png;base64,/,''), 
                            'base64',
                            function(error) {
                                if(error) throw error;
                            }
                        );
                    });
                });
                // Devタブを押下する
                devTab.click();
                // ブラウザ内のJavaScriptを実行させる
                browser.executeAsyncScript(function() {
                    var callback = arguments[arguments.length - 1];
                    callback(tabbar.getActiveTabIndex());
                }).then(function(tabIndex) {
                    assert.default(
                        tabIndex === 3,
                        'error:Devタブが押下されていない');
                    // スリープさせる
                    browser.sleep(sleepTime);
                    // スクリーンショットを取る
                    browser.takeScreenshot().then(function(data) {
                        fs.writeFile(
                            'screenshot/syonetwork/ClickedDevTab.png',
                            data.replace(/^data:image\/png;base64,/,''), 
                            'base64',
                            function(error) {
                                if(error) throw error;
                            }
                        );
                    });
                });
                // Homeタブを押下する
                homeTab.click();
                // ブラウザ内のJavaScriptを実行させる
                browser.executeAsyncScript(function() {
                    var callback = arguments[arguments.length - 1];
                    callback(tabbar.getActiveTabIndex());
                }).then(function(tabIndex) {
                    assert.default(
                        tabIndex === 0,
                        'error:Homeタブが押下されていない');
                    // スリープさせる
                    browser.sleep(sleepTime);
                    // スクリーンショットを取る
                    browser.takeScreenshot().then(function(data) {
                        fs.writeFile(
                            'screenshot/syonetwork/ClickedHomeTab.png',
                            data.replace(/^data:image\/png;base64,/,''), 
                            'base64',
                            function(error) {
                                if(error) throw error;
                            }
                        );
                    });
                });
            });
        });
    }
}

var tabbarTest = new TabbarTest();

// サイドメニューの表示テストの実行
tabbarTest.clickTabbarTest();