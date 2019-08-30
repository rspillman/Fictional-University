var gulp = require('gulp'),
settings = require('./settings'),
webpack = require('webpack'),
browserSync = require('browser-sync').create(),
postcss = require('gulp-postcss'),
rgba = require('postcss-hexrgba'),
autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
nested = require('postcss-nested'),
cssImport = require('postcss-import'),
mixins = require('postcss-mixins'),
colorFunctions = require('postcss-color-function');

gulp.task('styles', function() {
  return gulp.src(settings.themeLocation + '/css/style.css')
    .pipe(postcss([cssImport, mixins, cssvars, nested, rgba, colorFunctions, autoprefixer]))
    .on('error', (error) => console.log(error.toString()))
    .pipe(gulp.dest(settings.themeLocation));
});

gulp.task('scripts', function(callback) {
  webpack(require('./webpack.config.js'), function(err, stats) {
    if (err) {
      console.log(err.toString());
    }

    console.log(stats.toString());
    callback();
  });
});

gulp.task('watch', function() {
  browserSync.init({
    notify: true,
    proxy: settings.urlToPreview,
    ghostMode: true
  });

  // gulp.watch('./**/*.php', function() {
  //  browserSync.reload();

  gulp.watch('./**/*.php').on('change', browserSync.reload);

  gulp.watch(settings.themeLocation + 'css/modules/*.css', gulp.parallel('waitForStyles'));
  gulp.watch([settings.themeLocation + 'js/modules/*.js', settings.themeLocation + 'js/scripts.js'], gulp.parallel('waitForScripts'));


gulp.task('waitForStyles', gulp.series('styles', function() {
    return gulp.src(settings.themeLocation + '/css/style.css')
    .pipe(browserSync.reload.stream());
}))

gulp.task('waitForScripts', gulp.series('scripts', function(cb) {
  browserSync.reload();
  cb()
}))