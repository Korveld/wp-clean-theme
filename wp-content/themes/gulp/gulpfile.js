const gulpversion   = '4'; // Gulp version: 3 or 4

const gulp          = require('gulp'),
      sass          = require('gulp-sass'),
      concat        = require('gulp-concat'),
      cleancss      = require('gulp-clean-css'),
      rename        = require('gulp-rename'),
      autoprefixer  = require('gulp-autoprefixer'),
      notify        = require('gulp-notify'),
      imagemin      = require('gulp-imagemin'),
      browserSync   = require('browser-sync');

gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: "clean.loc",
    notify: false,
    // open: true,
    // online: false, // Work Offline Without Internet Connection
    // tunnel: true, tunnel: "lockleigh", // Demonstration page: http://lockleigh.localtunnel.me
  })
});

gulp.task('styles', function() {
  return gulp.src([
    '../clean/assets/libs/fontawesome/css/all.min.css',
    '../clean/sass/style.scss'
  ])
    .pipe(sass({ outputStyle: 'nested' }).on("error", notify.onError( function (error) {
      return error.message;
    } )))
    .pipe(autoprefixer(['last 15 versions']))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('../clean/css'))
    .pipe(notify("Sass Success!"))
    // .pipe(browserSync.reload({ stream: true }))
});

gulp.task('images-min', () =>
  gulp.src('../clean/assets/images/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('../clean/images'))
);

gulp.task('scripts', function() {
  return gulp.src([
    '../clean/assets/js/jquery.easing.1.3.js',
    '../clean/assets/js/bootstrap.min.js',
    '../clean/assets/js/jquery.waypoints.min.js',
    '../clean/assets/js/main.js',
  ])
    .pipe(concat('scripts.min.js'))
    .pipe(gulp.dest('../clean/js'))
    // .pipe(browserSync.reload({ stream: true }))
});

gulp.task('code', function() {
  return gulp.src('../clean/*.php')
    .pipe(browserSync.reload({ stream: true }))
});

if (gulpversion == 4) {
  gulp.task('watch', function() {
    gulp.watch('../clean/sass/**/*', gulp.parallel('styles'));
    gulp.watch('../clean/assets/images/**/*', gulp.parallel('images-min'));
    gulp.watch('../clean/assets/js/**/*', gulp.parallel('scripts'));
    // gulp.watch('../clean/*.php', gulp.parallel('code'));
  });
  gulp.task('default', gulp.parallel('watch', 'styles', 'scripts'));
}
