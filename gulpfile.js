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

    // Angular2をpublic下に設置する。
    var angularPath = 'node_modules/angular2';
    gulp.src(angularPath + '/*.js')
        .pipe(gulp.dest('public/js/lib/angular2'));
    gulp.src(angularPath + '/bundles/**/*.js')
        .pipe(gulp.dest('public/js/lib/angular2/bundles'));
    gulp.src(angularPath + '/src/**/*.js')
        .pipe(gulp.dest('public/js/lib/angular2/src'));

    // SystemJSをpublic下に設置する。
    var systemJSPath = 'node_modules/systemjs';
    gulp.src(systemJSPath + '/dist/system.js')
        .pipe(gulp.dest('public/js/lib/systemjs/'));

} );

gulp.task('tsbuild', function() {
    var typescript = require('gulp-typescript');
    var config = {
        ts : {
            src: [
                // プロジェクトのresources/assets/ts以下すべてのディレクトリの.tsファイルを対象とする
                './resources/assets/ts/**/*.ts',
                // node_modulesは対象外
                '!./node_modules/**'
            ],
            dst: './public/js/',
            options: {
                target: 'ES5',
                module: 'commonjs',
                experimentalDecorators: true
            }
        }
    };

    // トランスパイルの実行
    gulp.src(config.ts.src)
               .pipe(typescript(config.ts.options))
               .js
               .pipe(gulp.dest(config.ts.dst));

} );
