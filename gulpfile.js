var gulp = require('gulp');

/**
 * 順番にタスクの実行を行い、環境を構築する
 * 
 * command:./node_modules/.bin/gulp 
 */
gulp.task('default', function() {

});

/**
 * npm installされた後に実行することで
 * 使用されるライブラリがpublic下に移動される。
 * 
 * command:./node_modules/.bin/gulp libcopy
 */
gulp.task('libcopy', function() {
    require('./gulpconfig/publiclibmanage').copy(gulp);  
});

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
});

/**
 * resources/assets/ts下の依存関係のあるJSファイルを結合させる
 * 
 * command:./node_modules/.bin/gulp concat
 */
gulp.task('concat', function() {
    var shell = require('gulp-shell');
    // JSファイルの結合
    gulp.src('').pipe(shell('./node_modules/.bin/webpack resources/assets/ts/contents/components/connpass.js public/js/contents/components/connpass.js'));
});

/**
 * public/css・js/下にあるファイルのgzip圧縮を行う
 * 
 * command:./node_modules/.bin/gulp gzip
 */
gulp.task('gzip', function() {
    require('./gulpconfig/publiclibmanage').gzip(gulp);
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
    gulp.src('resources/assets/ts/contents/**/*.js')
        .pipe(gulp.dest('public/js/contents/'));
    gulp.src('resources/assets/ts/contents/**/*.ts')
        .pipe(gulp.dest('public/js/contents/')); 
    gulp.src('resources/assets/ts/contents/**/*.map')
        .pipe(gulp.dest('public/js/contents/')); 
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