const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');

const cssFileName = process.argv[4];
function style() {
  let autoprefixBrowsers = ['> 0.3%', 'last 5 versions', 'firefox >= 4', 'safari 7', 'safari 8', 'IE 8', 'IE 9', 'IE 10', 'IE 11'];
  return gulp.src(`resources/scss/${cssFileName}/${cssFileName}.scss`)
    .pipe(sass())
    .pipe(autoprefixer({
      // cascade: true,
      overrideBrowserslist: autoprefixBrowsers
    }))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(gulp.dest('public/css'))
    .pipe(browserSync.stream())
}

function scripts() {
  return gulp.src('resources/js/script.js')
    .pipe(uglify())
    .pipe(gulp.dest('public/js'));
}

function watch() {
  browserSync.init({
    // server:{
    //   baseDir: "./public/"
    // },
    proxy: "127.0.0.1:8000",
    notify: false
  });

  gulp.watch(`resources/scss/${cssFileName}/${cssFileName}.scss`, style);
  gulp.watch(`resources/scss/${cssFileName}/**/*.scss`, style);

  gulp.watch('resources/js/*.js', scripts).on('change', browserSync.reload);

  gulp.watch('resources/views/**/*.php').on('change', browserSync.reload);
  gulp.watch('resources/views/**/**/*.php').on('change', browserSync.reload);

}

exports.style = style;
exports.watch = watch;
exports.scripts = scripts;