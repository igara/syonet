<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <link href="../css/lib/onsenui/onsenui.css" rel="stylesheet" type="text/css">
    <link href="../css/lib/onsenui/onsen-css-components-dark-theme.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/lib/angular/angular.min.js"></script>
    <script type="text/javascript" src="../js/lib/onsenui/onsenui.min.js"></script>
    <script type="text/javascript" src="../js/lib/onsenui/angular-onsenui.min.js"></script>
    <script type="text/javascript" src="../js/docs/screen/common/controller/docklist_controller.js"></script>
</head>
<body>

<ons-sliding-menu var="menu"
    menu-page="@{{hostName}}/docs/screen/common/design/design_menu.html"
    main-page="@{{hostName}}/docs/screen/common/design/design_tabbar.html"
    side="left" type="push" max-slide-distance="200px">
</ons-sliding-menu>
</body>
</html>
