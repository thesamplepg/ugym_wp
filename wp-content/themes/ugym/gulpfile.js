const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const browserSync = require("browser-sync").create();

function compileSass() {
  return gulp
    .src("assets/scss/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("assets/css"))
    .pipe(browserSync.stream());
}

function watch() {
  browserSync.init({
    proxy: "http://localhost:8888/ugym", // Адрес вашего WordPress-сайта на MAMP
    notify: false, // Отключить всплывающие уведомления
    open: false, // Не открывать автоматически браузер
  });
  gulp.watch("assets/scss/**/*.scss", compileSass);
  gulp.watch("./**/*.scss").on("change", browserSync.reload);
  gulp.watch("./**/*.php").on("change", browserSync.reload);
  gulp.watch("./**/*.js").on("change", browserSync.reload);
}

exports.default = gulp.series(compileSass, watch);
