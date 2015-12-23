var gulp = require('gulp');

gulp.task('default', function() {

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

} );

gulp.task('tsbuild', function() {
    var shell = require('gulp-shell');
    // tsファイルのビルド
    gulp.src('').pipe(shell('./node_modules/.bin/tsc'));

    /* resources/assets/ts/docs/下に存在する、ビルドで作成されたjsファイルを
       public/js/docs/下にディレクトリ構造ごとコピーする */
    gulp.src('resources/assets/ts/docs/**/*.js')
        .pipe(gulp.dest('public/js/docs/')); 
});

gulp.task('tsconfig', function() {
    var tsConfig = require('gulp-tsconfig-update');
    
    // ビルド対象のファイルを指定する
    gulp.src(
        'resources/assets/ts/**/*.ts').pipe(tsConfig());
});