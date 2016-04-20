/**
 * public下のライブラリを管理する
 */
var publicLibManage = {
    /**
     * public下に移動を行うメソッド
     * @param gulp
     */
    copy: function(gulp){
        // onsenUIをpublic下に設置する。
        var onsenUIPath = 'node_modules/onsenui';
        gulp.src(onsenUIPath + '/css/**')
        .pipe(gulp.dest('public/css/lib/onsenui'));
        gulp.src(onsenUIPath + '/js/**')
        .pipe(gulp.dest('public/js/lib/onsenui'));

        // mermaidをpublic下に設置する。
        var mermaidJSPath = 'node_modules/mermaid/dist';
        gulp.src(mermaidJSPath + '/mermaid.js')
        .pipe(gulp.dest('public/js/lib/mermaid'));
        gulp.src(mermaidJSPath + '/mermaid.css')
        .pipe(gulp.dest('public/css/lib/mermaid'));

        // markedをpublic下に設置する。
        var markedPath = 'node_modules/marked';
        gulp.src(markedPath + '/marked.min.js')
        .pipe(gulp.dest('public/js/lib/marked'));

        // AngularJSをpublic下に設置する。
        var angularJSPath = 'node_modules/angular';
        gulp.src(angularJSPath + '/angular.min.js')
        .pipe(gulp.dest('public/js/lib/angular'));
        gulp.src(angularJSPath + '/angular-csp.css')
        .pipe(gulp.dest('public/css/lib/angular'));

        // Angular2をpublic下に設置する。
        var angularPath = 'node_modules/angular2';
        gulp.src(angularPath + '/bundles/**/*.js')
        .pipe(gulp.dest('public/js/lib/angular2/bundles'));

        // SystemJSをpublic下に設置する。
        var systemJSPath = 'node_modules/systemjs';
        gulp.src(systemJSPath + '/dist/system.js')
        .pipe(gulp.dest('public/js/lib/systemjs/'));

        // rxjsをpublic下に設置する。
        var rxjsPath = 'node_modules/rxjs';
        gulp.src(rxjsPath + '/bundles/*.js')
        .pipe(gulp.dest('public/js/lib/rxjs/bundles'));

        // es6-shimをpublic下に設置する。
        var es6shimPath = 'node_modules/es6-shim';
        gulp.src(es6shimPath + '/*.js')
        .pipe(gulp.dest('public/js/lib/es6-shim/'));

        // reflect-metadata
        var reflectmetadataPath = 'node_modules/reflect-metadata';
        gulp.src(reflectmetadataPath + '/*.js')
        .pipe(gulp.dest('public/js/lib/reflect-metadata/'));

        // snapsvgをpublic下に設置する
        var snapsvgPath = 'node_modules/snapsvg';
        gulp.src(snapsvgPath + '/dist/*.js')
        .pipe(gulp.dest('public/js/lib/snapsvg/'))
    },
    /**
     * public下の静的ファイルをgzipにする
     * @param gulp
     */
    gzip: function(gulp){
        var gzip = require('gulp-gzip');
        gulp.src('public/css/**/*.css')
		.pipe(gzip())
		.pipe(gulp.dest('public/css/'));
        gulp.src('public/js/**/*.js')
		.pipe(gzip())
		.pipe(gulp.dest('public/js/'));
    }
    
};
module.exports = publicLibManage;