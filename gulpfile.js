var gulp = require('gulp');
var sass = require('gulp-sass');

var sassFiles = "wordpress/wp-content/themes/Marionetterna/inc/sass/style.scss"
var cssPath = "wordpress/wp-content/themes/Marionetterna/inc/css"

gulp.task("sass", function() {
    return gulp.src(sassFiles)
        .pipe(sass()).on('error', sass.logError)
        .pipe(gulp.dest(cssPath))
});

gulp.task('watch:sass', function () {
    gulp.watch(sassFiles, gulp.series("sass"));
});


gulp.task('build', gulp.series('watch:sass'));

gulp.task('default', gulp.series('build'));