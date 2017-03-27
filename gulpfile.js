'use srict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

var dir = {
  'src': {
    'css': './src/css/'
  },
  'dest': {
    'css': './assets/css/'
  }
};

gulp.task('css', function() {
  gulp.src(dir.src.css + '**/*.scss')
    .pipe(sass({
      outputStyle: 'expanded',
      includePaths: require('node-normalize-scss').includePaths
    }))
    .pipe(gulp.dest(dir.dest.css));
});
