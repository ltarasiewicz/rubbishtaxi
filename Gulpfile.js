var gulp = require('gulp');
var rename = require('gulp-rename');
var gifsicle = require('imagemin-gifsicle');
var jpegoptim = require('imagemin-jpegoptim');
var pngquant = require('imagemin-pngquant');
var minifyCSS = require('gulp-minify-css');
var uglifyJS = require('gulp-uglify');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('compress-1', function () {
    return gulp.src('themes/rubbish_taxi/images/**.*')                
        .pipe(jpegoptim({progressive: true, max: 70})())
        .pipe(pngquant({ quality: '60-70' })())
        .pipe(gifsicle({ interlaced: true })())
        .pipe(gulp.dest('themes/rubbish_taxi/images/dist'));
});

gulp.task('compress-2', function () {
    return gulp.src('themes/rubbish_taxi/images/headers/**.*')                
        .pipe(jpegoptim({progressive: true, max: 70})())
        .pipe(pngquant({ quality: '60-70' })())
        .pipe(gifsicle({ interlaced: true })())
        .pipe(gulp.dest('themes/rubbish_taxi/images/dist/headers'));
});


gulp.task('process-css', function() {

    var files = [
        'themes/rubbish_taxi/css/bootstrap.css',
        'themes/rubbish_taxi/css/custom.css',
        'themes/rubbish_taxi/css/responsive.css',
        'themes/rubbish_taxi/css/jquery.fancybox.css'
    ];

    return gulp.src(files)
        .pipe(sourcemaps.init())
        .pipe(concat("main-bundle.css"))
        .pipe(minifyCSS())
        .pipe(rename(function(path) {
            path.basename += ".min";
        }))
        .pipe(sourcemaps.write('sourcemaps/'))
        .pipe(gulp.dest('themes/rubbish_taxi/css/'));
});

gulp.task('process-js', function (){
    gulp.src('themes/rubbish_taxi/js/*.js')
        .pipe(sourcemaps.init())
        .pipe(uglifyJS())
        .pipe(concat('main-bundle.js'))
        .pipe(rename(function(path) {
            path.basename += ".min";
        }))
        .pipe(sourcemaps.write('sourcemaps/'))
        .pipe(gulp.dest("themes/rubbish_taxi/js/"));
});


gulp.task('process-img', ['compress-1', 'compress-2']);