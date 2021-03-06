'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('./assets/css/src/main.scss')
        .pipe(sass().on('error', console.error))
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./assets/css/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'sass:watch']);
