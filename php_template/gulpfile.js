var gulp    = require('gulp');
var phpunit = require('gulp-phpunit');
var notify = require('gulp-notify');
var run = require('gulp-run');

gulp.task('test', function() {
    var options = {'verbose': 'v', notify: true};
    gulp.src('phpunit.xml')
        .pipe(run('clear'))
        .pipe(phpunit('./vendor/bin/phpunit',options))
        .on('error', notify.onError({
            title: "Crap",
            message: "Your tests failed!"
        }))
        .pipe(notify({
            title: "Success",
            message: "All tests have returned green!"
        }));
});

gulp.task('watch', function() {
    gulp.watch(['tests/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);