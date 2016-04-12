if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/swtop.js', { scope: '/' }).catch(function(error) {
        // 登録失敗した時
        cleanReload();
    });
}

/**
 * サイドメニューにあるClean & Reloadを押下した時のイベント
 */
function cleanReload() {
    if (navigator.serviceWorker.getRegistrations()) {
        navigator.serviceWorker.getRegistrations().then(function(registrations) {
            // 登録されているworkerを全て削除する
            registrations.forEach(function(registration) {
                registration.unregister();
            });
        });
        caches.keys().then(function(keys) {
            var promises = [];
            // キャッシュストレージを全て削除する
            keys.forEach(function(cacheName) {
                if (cacheName) {
                    promises.push(caches.delete(cacheName));
                }
            });
        });
    }
    location.reload();
}