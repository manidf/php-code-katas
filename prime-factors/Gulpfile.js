var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var run = require('gulp-run');
var plumbler = require('gulp-notify');

gulp.task('test', function () {
    gulp.src('spec/**/*.php')
        .pipe(run('clear'))
        .pipe(phpspec('', {
            'verbose': 'v',
            'notify': true
        }))
        .pipe(notify({
            title: 'Success',
            message: 'All tests have returned green!'
        }));
});

gulp.taks('watch', function () {
    gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);