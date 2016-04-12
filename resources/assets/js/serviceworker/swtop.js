var PAGE = 'top';
var CACHE_NAME = PAGE + '_cache';
var ORIGIN = location.protocol + '//' + location.hostname +
             (location.port ? ':' + location.port : '');
// キャッシュさせたいファイル
var STATIC_FILES = [
  ORIGIN + '/',
  ORIGIN + '/css/lib/onsenui/onsenui.css',
  ORIGIN + '/css/lib/onsenui/onsen-css-components-blue-basic-theme.css',
  ORIGIN + '/js/lib/angular/angular.min.js',
  ORIGIN + '/js/lib/onsenui/onsenui.min.js',
  ORIGIN + '/js/lib/onsenui/angular-onsenui.min.js',
  ORIGIN + '/css/lib/onsenui/font_awesome/css/font-awesome.min.css',
  ORIGIN + '/css/lib/onsenui/ionicons/css/ionicons.min.css',
  ORIGIN + '/css/lib/onsenui/material-design-iconic-font/css/material-design-iconic-font.min.css',
  ORIGIN + '/tabbar/tabbar/?&tabbarstatus=home',
  ORIGIN + '/sidemenu/sidemenu_top',
  ORIGIN + '/favicon.ico',
  ORIGIN + '/css/lib/onsenui/ionicons/fonts/ionicons.ttf?v=2.0.0',
  ORIGIN + '/css/lib/onsenui/font_awesome/fonts/fontawesome-webfont.woff2?v=4.4.0',
  ORIGIN + '/css/lib/onsenui/ionicons/fonts/ionicons.woff?v=2.0.0',
  ORIGIN + '/css/lib/onsenui/font_awesome/fonts/fontawesome-webfont.woff?v=4.4.0',
  ORIGIN + '/tabbar/navigation/home/home_top?tabbarstatus=home',
  ORIGIN + '/tabbar/navigation/contents/contents_top?tabbarstatus=home',
  ORIGIN + '/tabbar/navigation/docs/docs_top?tabbarstatus=home',
  ORIGIN + '/tabbar/navigation/dev/dev_top?tabbarstatus=home',
  ORIGIN + '/css/lib/onsenui/font_awesome/fonts/fontawesome-webfont.ttf?v=4.4.0',
  ORIGIN + '/css/symbol/myicon/icon-garasyo.css'];
var STATIC_FILE_URL_HASH = {};
STATIC_FILES.forEach(function(x) {
    STATIC_FILE_URL_HASH[x] = true;
});

/**
 * service worker install eventlistener
 */
self.addEventListener('install', function(event) {
    console.log('install');
    // キャッシュストレージに新しくキー値を設定し作成する
    event.waitUntil(caches.open(CACHE_NAME).then(function(cache) {
        return Promise.all(STATIC_FILES.map(function(url) {
            return fetch(new Request(url)).then(function(response) {
                // レスポンスがあった場合、キャッシュに保存を行う
                if (response.ok) {
                    return cache.put(response.url, response);
                }
                return Promise.reject(
                    'Invalid response.  URL:' + response.url +
                    ' Status: ' + response.status);
            });
        }));
    }));
});

/**
 * service worker activate eventlistener
 */
self.addEventListener('activate', function(event) {
    console.log("activate");
    // キャッシュストレージからキー値を用いてキーに結びつくキャッシュの確認を行う
    event.waitUntil(caches.keys().then(function(keys) {
        var promises = [];
        return Promise.all(promises);
    }).then(function() {
        return self.clients.claim();
    }));
});

/**
 * service worker fetch eventlistener
 */
self.addEventListener('fetch', function(event) {
    console.log("fetch");
    // キャッシュストレージにあるURLと一致しているか判定
    if (!STATIC_FILE_URL_HASH[event.request.url]) {
        return;
    }
    event.respondWith(caches.match(event.request, {cacheName: CACHE_NAME}));
});