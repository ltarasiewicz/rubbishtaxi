var gulp = require('gulp');
var rename = require('gulp-rename');
var gifsicle = require('imagemin-gifsicle');
var jpegoptim = require('imagemin-jpegoptim');
var pngquant = require('imagemin-pngquant');

var minifyCSS = require('gulp-minify-css');
var uglifyJS = require('gulp-uglify');
var concat = require('gulp-concat');

gulp.task('compress', function () {
    return gulp.src('themes/rubbish_taxi/images/**.*')                
        .pipe(jpegoptim({progressive: true, max: 70})())
        .pipe(pngquant({ quality: '60-70' })())
        .pipe(gifsicle({ interlaced: true })())
        .pipe(gulp.dest('themes/rubbish_taxi/images/dist'));
});

gulp.task('compress2', function () {
    return gulp.src('themes/rubbish_taxi/images/headers/**.*')                
        .pipe(jpegoptim({progressive: true, max: 70})())
        .pipe(pngquant({ quality: '60-70' })())
        .pipe(gifsicle({ interlaced: true })())
        .pipe(gulp.dest('themes/rubbish_taxi/images/dist/headers'));
});




gulp.task('minifyCSS', ['concatCSS'], function() {
    return gulp.src('themes/rubbish_taxi/css/dist/*.css')
        .pipe(minifyCSS())
        .pipe(gulp.dest('themes/rubbish_taxi/css/dist/'));
});

gulp.task('concatCSS', function() {

    var files = [
        'themes/rubbish_taxi/css/bootstrap.css',
        'themes/rubbish_taxi/css/custom.css',
        'themes/rubbish_taxi/css/responsive.css',
        'themes/rubbish_taxi/css/jquery.fancybox.css'
    ];

    return gulp.src(files)
        .pipe(concat("bundle.css"))
        .pipe(gulp.dest('themes/rubbish_taxi/css/dist/'));
});

gulp.task('renameCSS', ['minifyCSS'], function() {
    gulp.src('themes/rubbish_taxi/css/dist/bundle.css')
        .pipe(rename(function(path) {
            path.basename += ".min";
        }))
        .pipe(gulp.dest("themes/rubbish_taxi/css/"));
});

gulp.task('uglifyJS', function (){
    var files = [
        'themes/rubbish_taxi/js/bootstrap.min.js',
        'docs.min.js',
        'jquery.fancybox.js',
        'jquery.js',
        'jquery_002.js',
        'jquery_003.js',
        'main.js',
        'masonry.min.js'
    ];
    gulp.src('themes/rubbish_taxi/js/*.js')
        .pipe(uglifyJS())
        .pipe(gulp.dest('themes/rubbish_taxi/js/dist/'));
});

gulp.task('concatJS', function() {
    gulp.src('themes/rubbish_taxi/js/dist/*.js')
        .pipe(concat('bundle.js'))
        .pipe(gulp.dest('themes/rubbish_taxi/js/dist/'));
});

gulp.task('renameJS', function() {
    gulp.src('themes/rubbish_taxi/js/dist/bundle.js')
        .pipe(rename(function(path) {
            path.basename += ".min";
        }))
        .pipe(gulp.dest("themes/rubbish_taxi/js/"));
});