/// <reference path="../../../typings/main.d.ts" />
/// <reference path="../../../typings/syonet/BrowserSetting.ts" />
/// <reference path="../../../typings/syonet/SyonetWork.d.ts" />

import * as assert from 'power-assert';
import browserSetting = require('../../../typings/syonet/BrowserSetting');
import fs = require('fs');

// テストを行うページのURL
const url = 'http://localhost:8000/docs';

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
        describe('タブバー押下のテスト', function () {
            it('4つあるタブバーを押下して表示が変わることを確認する', function (done) {
                // ブラウザのサイズを設定
                browser.manage().window().setSize(browserSize.width, browserSize.height);
                // Webページへアクセスする
                browser.get(url);
                // Angularによるレンダリングを待機する
                browser.waitForAngular();
                // テスト開始時、スリープさせる
                browser.sleep(sleepTime);
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
                            'screenshot/syonetwork_docs/ClickedHomeTab.png',
                            data.replace(/^data:image\/png;base64,/,''), 
                            'base64',
                            function(error) {
                                if(error) throw error;
                            }
                        );
                    });
                });
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
                            'screenshot/syonetwork_docs/ClickedContentsTab.png',
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
                            'screenshot/syonetwork_docs/ClickedDocsTab.png',
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
                            'screenshot/syonetwork_docs/ClickedDevTab.png',
                            data.replace(/^data:image\/png;base64,/,''), 
                            'base64',
                            function(error) {
                                if(error) throw error;
                            }
                        );
                        done();
                    });
                });
            });
        });
    }
}

var tabbarTest = new TabbarTest();

// サイドメニューの表示テストの実行
tabbarTest.clickTabbarTest();