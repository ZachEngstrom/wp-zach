var gulp         = require('gulp'),
    sass         = require('gulp-ruby-sass'),
    sourcemaps   = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss    = require('gulp-minify-css'),
    concat       = require('gulp-concat'),
    uglify       = require('gulp-uglify'),
    rename       = require('gulp-rename');

gulp.task('styles', function() {
    return sass('pre-processed-styles-scripts/sass/style-expanded.scss', {
      sourcemap: true,
      style: 'expanded'
      //style: 'nested' // default
      //style: 'compact'
      //style: 'compressed'
   })
    .on('error', function (err) {
      console.error('Error', err.message);
    })
   .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1')) // prefixes style-expanded.css
   .pipe(gulp.dest('pre-processed-styles-scripts/sass')) // outputs style-expanded.css
   .pipe(rename('style.min.css')) // renames style-expanded.css to style.min.css
   .pipe(minifycss()) // minifies style.min.css
   .pipe(sourcemaps.write('./', {
        includeContent: false,
        sourceRoot: 'sass'
    }))
   .pipe(gulp.dest('wp-content/themes/BCBSMN/assets/css')); // ouputs style.min.css
});

gulp.task('scripts', function(){
    return gulp.src([ // array of files to concatenate
      'pre-processed-styles-scripts/js/jquery.min.js',
      'pre-processed-styles-scripts/js/bootstrap.min.js',
      'pre-processed-styles-scripts/js/main.js'
    ])
    .pipe(concat('scripts.min.js')) // concatenates the JS files listed above into one file called scripts.min.js
    .pipe(uglify()) // minifies scripts.min.js
    .pipe(gulp.dest('wp-content/themes/BCBSMN/assets/js')); // outputs scripts.min.js
});

gulp.task('watch', function() {  
  gulp.watch('pre-processed-styles-scripts/sass/**/*.scss', ['styles']); // Watch the sass files
  gulp.watch('pre-processed-styles-scripts/js/**/*.js', ['scripts']); // Watch the JS files
});