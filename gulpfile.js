var gulp = require('gulp');

/**
 * npm installされた後に実行することで
 * 使用されるライブラリがpublic下に移動される。
 * 
 * command:./node_modules/.bin/gulp 
 */
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

} );

/**
 * resources/assets/ts下にあるTypeScriptのトランスパイルを行う
 * 
 * command:./node_modules/.bin/gulp tsbuild
 */
gulp.task('tsbuild', function() {
    var shell = require('gulp-shell');
    // tsファイルのビルド
    gulp.src('').pipe(shell('./node_modules/.bin/tsc'));

    /* resources/assets/ts/docs/下に存在する、ビルドで作成されたjsファイルを
       public/js/docs/下にディレクトリ構造ごとコピーする */
    gulp.src('resources/assets/ts/docs/**/*.js')
        .pipe(gulp.dest('public/js/docs/'));
    gulp.src('resources/assets/ts/common/**/*.js')
        .pipe(gulp.dest('public/js/common/'));
    gulp.src('resources/assets/ts/contents/**/*.js')
        .pipe(gulp.dest('public/js/contents/'));
});

/**
 * public/css・js/下にあるファイルのgzip圧縮を行う
 * 
 * command:./node_modules/.bin/gulp gzip
 */
gulp.task('gzip', function() {
    var gzip = require('gulp-gzip');
    gulp.src('public/css/**/*.css')
		.pipe(gzip())
		.pipe(gulp.dest('public/css/'));
    gulp.src('public/js/**/*.js')
		.pipe(gzip())
		.pipe(gulp.dest('public/js/'));
});

/**
 * resources/assets/ts下にあるTypeScriptのトランスパイルを行い、
 * sourcemapも出力する。
 * 
 * command:./node_modules/.bin/gulp tsdevbuild
 */
gulp.task('tsdevbuild', function() {
    var shell = require('gulp-shell');
    // tsファイルのビルド
    gulp.src('').pipe(shell('./node_modules/.bin/tsc --sourcemap --watch'));

    /* resources/assets/ts/docs/下に存在する、ビルドで作成されたjsファイルを
       public/js/docs/下にディレクトリ構造ごとコピーする */
    gulp.src('resources/assets/ts/docs/**/*.js')
        .pipe(gulp.dest('public/js/docs/'));
    gulp.src('resources/assets/ts/docs/**/*.ts')
        .pipe(gulp.dest('public/js/docs/'));
    gulp.src('resources/assets/ts/docs/**/*.map')
        .pipe(gulp.dest('public/js/docs/'));

    gulp.src('resources/assets/ts/common/**/*.js')
        .pipe(gulp.dest('public/js/common/'));
    gulp.src('resources/assets/ts/common/**/*.ts')
        .pipe(gulp.dest('public/js/common/')); 
    gulp.src('resources/assets/ts/common/**/*.map')
        .pipe(gulp.dest('public/js/common/')); 
});

/**
 * gulpのコマンドによって複製・ビルドされたファイルを削除する
 * 
 * command:./node_modules/.bin/gulp clean
 */
gulp.task('clean', function(cb) {
    var del = require('del');
    del(['resources/assets/ts/**/*.js'], cb);
    del(['resources/assets/ts/**/*.map'], cb);
    del(['public/js/**/*.ts'], cb);
    del(['public/js/**/*.js'], cb);
    del(['public/js/**/*.map'], cb);
    del(['tests/e2e/**/*.js'], cb);
});

/**
 * resources/assets/ts下にあるTypeScriptをビルド対象として
 * tsconfig.jsonにファイル名の追記を行う。
 * 
 * command:./node_modules/.bin/gulp tsconfig
 */
gulp.task('tsconfig', function() {
    var tsConfig = require('gulp-tsconfig-update');
    
    // ビルド対象のファイルを指定する
    gulp.src(['resources/assets/ts/**/*.ts','tests/e2e/**/*.ts', 'typings/syonet/*.ts'])
        .pipe(tsConfig());
});

/**
 * typings/syonet/下にあるTypeScriptの型定義ファイルを作成する
 * 
 * command:./node_modules/.bin/gulp tsdcreate
 */
gulp.task('tsdcreate', function() {
    var shell = require('gulp-shell');
    // tsdファイルの作成を行う
    gulp.src('').pipe(shell('./node_modules/.bin/tsc -d typings/syonet/SyonetWork.ts'));
    gulp.src('').pipe(shell('./node_modules/.bin/tsc -d typings/syonet/BrowserSetting.ts'));
});