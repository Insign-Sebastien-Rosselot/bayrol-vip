const gulp = require('gulp');
const sass = require('gulp-sass');
const php = require('gulp-connect-php');
const browserSync = require('browser-sync').create();
const useref = require('gulp-useref');
const gulpif = require('gulp-if');
const csso = require('gulp-csso');
const autoprefixer = require('gulp-autoprefixer');


// Task for compiling scss files into css
gulp.task('sass', function () {
    return gulp
        .src('src/scss/styles.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest('src/css'))
});
//////////////

// Task for watching change on scss, html, js and php file
// This task will automatically reload browser page
gulp.task('watch', function () {
    gulp.watch('src/scss/**/*.scss', gulp.series('sass', 'reload'));
    gulp.watch('src/**/*.{html,php,js,css}', gulp.series('reload'));
});
//////////////

// Task to add php server on browsersync
gulp.task('php', function(){
    php.server({base:'./src', port:3000, keepalive:true});
});
//////////////

// Task to up a browsersync server
gulp.task('serve', function () {
    browserSync.init({
        proxy:"localhost:3000",
        baseDir: "./src",
        open:true,
        notify:false
    });
});
//////////////

// Task to reload browsersync
gulp.task('reload', function (done) {
    browserSync.reload();
    done();
});
//////////////

// Task  for up a build environment
gulp.task('build', gulp.parallel('php','serve', 'watch'));
//////////////

// Task to copy folder assets into dist folder
gulp.task('copy_assets', function () {
    return gulp
        .src(['./src/assets/**'], {base: "./src/assets"})
        .pipe(gulp.dest('dist/assets'));
});
//////////////

// Task for copy css, html/php and js file (with concatenation and minification) into dist folder
gulp.task('copy_files', function () {
    return gulp.src('src/*.php')
        .pipe(useref())
        .pipe(gulpif('*.css', csso()))
        .pipe(gulp.dest('dist'))
});
//////////////

// Task for copy all necessary files and folder into dist folder for production
gulp.task('prod', gulp.parallel('copy_assets','copy_files'));
//////////////