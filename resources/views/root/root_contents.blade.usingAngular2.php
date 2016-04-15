<!DOCTYPE html>
<html lang="ja" ng-app="app">
<head>
    <title>SyoNet!</title>
    <meta charset="UTF-8">	
    <meta name="description" content="Web・Networkなどの技術サイトです。">
    <link href="/css/lib/onsenui/onsenui.css" rel="stylesheet" type="text/css">
    <link href="/css/lib/onsenui/onsen-css-components-blue-basic-theme.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/lib/angular/angular.min.js"></script>
    <script type="text/javascript" src="/js/lib/onsenui/onsenui.min.js"></script>
    <script type="text/javascript" src="/js/lib/onsenui/angular-onsenui.min.js"></script>
    <script>
        var app = angular.module('app', ['onsen']);
    </script>
    <script type="text/javascript" src="/js/lib/es6-shim/es6-shim.min.js"></script>
    <script type="text/javascript" src="/js/lib/angular2/bundles/angular2-polyfills.min.js"></script>
    <script type="text/javascript" src="/js/lib/systemjs/system.js"></script>
    <script>
      System.config({
        map: {
         'reflect-metadata': '/js/lib/reflect-metadata/Reflect.js'
        },
        packages: {        
          app: {
            format: 'register',
            defaultExtension: 'js'
          }
        }
      });
    </script>
    <script type="text/javascript" src="/js/lib/rxjs/bundles/Rx.min.js"></script>
    <script type="text/javascript" src="/js/lib/angular2/bundles/angular2.min.js"></script>
    
    <script>
      System.import('/js/contents/components/suggester.js')
            .then(null, console.error.bind(console));
    </script>
    {!! $contentsImportJS !!}
</head>
<body>
    <ons-sliding-menu var="menu"
        menu-page="/sidemenu/sidemenu_top"
        main-page="/tabbar/tabbar/?{{ $requestParams }}&tabbarstatus={{ $tabbarStatus }}"
        side="left" type="push" max-slide-distance="200px">
    </ons-sliding-menu>
    <!-- todo:ブラウザバックした際に選択したタブの情報を保存する -->
    <input style="display: none;" type="text" name="saveTabberIndex" id="saveTabberIndex">
</body>
</html>
