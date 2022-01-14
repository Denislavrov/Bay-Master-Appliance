'use strict';

module.exports = function() {
    $.gulp.task('sass', function() {
        return $.gulp.src('styles/scss/styles.scss')
            .pipe($.gp.sourcemaps.init())
            .pipe($.gp.sass()).on('error', $.gp.notify.onError({ title: 'Style' }))
            .pipe($.gp.autoprefixer({
                cascade: false
            }))
            .pipe($.gp.cleanCss({compatibility: 'ie11'}))
            .pipe($.gp.if($.argv.dev, $.gp.sourcemaps.write()))
            .pipe($.gp.rename('app.css'))
            .pipe($.gulp.dest('styles'));
    })
};