// include gulp
var gulp = require('gulp');

// include plug-ins
var sass = require('gulp-sass');
var watch = require("gulp-watch");

// run sass
gulp.task('sass', function () {
    return gulp.src('./build/sass/*.scss')
        .pipe(sass(
            {style: 'compressed'}
        ))
        .pipe(gulp.dest('./assets/css/'));
});

// gulp watch
gulp.task('watch', function () {

    // watch for sass changes
    gulp.watch('./build/sass/*.scss', ['sass']);
    watch('./build/sass/*.scss', function(){
        gulp.start('sass');
    });
});

// default gulp task
gulp.task('default', ['watch'], function () {

    gulp.start('sass');
});