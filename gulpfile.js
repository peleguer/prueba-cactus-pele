const gulp = require('gulp');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

const themePath = 'public/wp-content/themes/cactus/';

gulp.task('minify-js', function() {
    return gulp.src( themePath + 'scripts/main.js' ) // Main Javascript file in theme folder
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest( themePath + 'scripts' )); // Same folder for destination
});

gulp.task('watch', function() {
    gulp.watch( themePath + 'scripts/main.js', gulp.series('minify-js') );
});
  

// The default task (called when you run `gulp` from cli)
gulp.task('default', gulp.series('minify-js', 'watch'));