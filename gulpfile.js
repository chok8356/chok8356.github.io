var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var less        = require('gulp-less');
 
gulp.task('serve', ['less'], function() {

    browserSync.init({
        proxy: "grph",
        notify: false
    });

    gulp.watch("less/*.less", ['less']);
    gulp.watch("./*.html").on('change', browserSync.reload);
    gulp.watch("./*.php").on('change', browserSync.reload);
    gulp.watch("./*.js").on('change', browserSync.reload);
});


gulp.task('less', function(done) {
    gulp.src('less/*.less')
    .pipe(less().on('error', function(error) {
      // у нас ошибка
      done(error);
    }))
    .pipe(gulp.dest('./'))
    .on('end', function() {
      // у нас все закончилось успешно
      done();
    })
    .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);

