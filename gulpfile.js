var gulp = require('gulp');

/**
 * 順番にタスクの実行を行い、環境を構築する
 * 
 * command:./node_modules/.bin/gulp 
 */
gulp.task('default', ['libcopy', 'gzip', 'styleguide'], function() {

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
gulp.task('tsbuild', ['tsconfig'], function() {
    var shell = require('gulp-shell');
    // tsファイルのビルド
    return gulp.src('').pipe(shell('./node_modules/.bin/tsc'));
});

/**
 * resources/assets/ts下にあるJSファイルの移動を行う
 * 
 * command:./node_modules/.bin/gulp buildcopy
 */
gulp.task('buildcopy', function() {
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
gulp.task('concat', ['tsbuild'], function() {
    var shell = require('gulp-shell');
    // JSファイルの結合
    gulp.src('').pipe(shell('./node_modules/.bin/webpack resources/assets/ts/contents/connpass/components/connpass.js public/js/contents/connpass/components/connpass.js'));
    gulp.src('').pipe(shell('./node_modules/.bin/webpack resources/assets/js/serviceworker/swtop.js public/swtop.js'));
});

/**
 * public/css・js/下にあるファイルのgzip圧縮を行う
 * 
 * command:./node_modules/.bin/gulp gzip
 */
gulp.task('gzip', ['concat'],function() {
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
    del('resources/assets/ts/**/*.js', cb);
    del('resources/assets/ts/**/*.map', cb);
    del('public/js/**/*.js', cb);
    del('tests/e2e/**/*.js', cb);
    del('public/css/', cb);
    del('public/documents/styleguide/', cb);
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
    return gulp.src(['resources/assets/ts/**/*.ts','tests/e2e/**/*.ts'])
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

/**
 * resource/assets/styleguide/css下にあるcssのビルドを行う
 * 
 * command:./node_modules/.bin/gulp cssbuild
 */
gulp.task('cssbuild', function() {
    var postcss = require('gulp-postcss');
    gulp.src('resources/assets/styleguide/postcss/**/*.css')
        .pipe(postcss([require('autoprefixer'), require('precss')]))
        .pipe(gulp.dest('resources/assets/styleguide/css/'));
    return gulp.src('resources/assets/styleguide/postcss/**/*.css')
        .pipe(postcss([require('autoprefixer'), require('precss'), require('cssnano')]))
        .pipe(gulp.dest('public/css/'));
});

/**
 * styleguideを生成する
 * 
 * command:./node_modules/.bin/gulp styleguide
 */
gulp.task('styleguide', ['cssbuild'], function() {
    var frontNote = require('gulp-frontnote');
    gulp.src('./resources/assets/styleguide/css/**/*.css')
    .pipe(frontNote({
        title: 'SyoNetのCSS StyleGuide',
        includePath: './public/documents/styleguide/assets/**/*',
        out: './public/documents/styleguide',
        script: ['/js/lib/angular/angular.min.js', '/js/lib/onsenui/onsenui.min.js', '/js/lib/onsenui/angular-onsenui.min.js'],
        css: ['/css/lib/onsenui/onsenui.css', '/css/lib/onsenui/onsen-css-components-blue-basic-theme.css'],
        overview: './resources/assets/styleguide/styleguide.md'
    }));
});