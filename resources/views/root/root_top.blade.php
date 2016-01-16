<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <title>SyoNet!</title>	
    <meta name="description" content="Web・Networkなどの技術サイトです。">
    <link href="/css/lib/onsenui/onsenui.css" rel="stylesheet" type="text/css">
    <link href="/css/lib/onsenui/onsen-css-components-dark-theme.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/lib/angular/angular.min.js"></script>
    <script type="text/javascript" src="/js/lib/onsenui/onsenui.min.js"></script>
    <script type="text/javascript" src="/js/lib/onsenui/angular-onsenui.min.js"></script>
    <script type="text/javascript" src="/js/common/controller/common_controller.js"></script>
    <script type="text/javascript" src="/js/lib/marked/marked.min.js"></script>
</head>
<body ng-controller="CommonController">
    <ons-sliding-menu var="menu"
        menu-page="/sidemenu/sidemenu_top"
        main-page="/tabbar/tabbar_top"
        side="left" type="push" max-slide-distance="200px">
    </ons-sliding-menu>
    
    <!-- todo:ブラウザバックした際に選択したタブの情報を保存する -->
    <input style="display: none;" type="text" name="saveTabberIndex" id="saveTabberIndex">
</body>
</html>
