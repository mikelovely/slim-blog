
var gulp = require('gulp');
var concat = require('gulp-concat');
var cssmin = require('gulp-minify-css');
var rename = require("gulp-rename");
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

gulp.task('default', ['scripts', 'styles', 'watch']);

// scripts task
gulp.task('scripts', function() {
  return gulp.src('./src/js/*.js')
    .pipe(concat('app.js'))
    .pipe(gulp.dest('./public/js/'))
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./public/js/'));
});

// styles task
gulp.task('styles', function() {
  return gulp.src([
    './src/sass/variables.scss',
    './src/sass/*.scss',
    './src/sass/*/*.scss',
    ])
    .pipe(concat('app.css'))
    .pipe(sass())
    .pipe(gulp.dest('./public/css/'))
    .pipe(cssmin())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./public/css/'));
});

// watch task
gulp.task('watch', function() {
  gulp.watch('./src/js/*.js', ['scripts']);
  gulp.watch('./src/sass/*.scss', ['styles']);
  gulp.watch('./src/sass/*/*.scss', ['styles']);
});

