var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var compass = require('gulp-compass');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

gulp.task('img', function () {
    return gulp.src('./assets/img/full/**/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('assets/img/'));
});
 
gulp.task('css', function() {
  gulp.src('./assets/sass/styles.scss')
    .pipe(compass({
      config_file: './config.rb',
      css: './',
      sass: './assets/sass/',
      sourcemap: true,
  	  style: 'compressed'
    }))
    .pipe(gulp.dest('./'));
});

gulp.task('javascript', function() {
  gulp.src(['./assets/js/jquery.js','./assets/js/fastclick.js','./assets/js/modernizr.js','./assets/js/main.js'])
  	.pipe(sourcemaps.init())
  	.pipe(concat({ path: 'main.min.js', stat: { mode: 0666 }}))
  	.pipe(sourcemaps.write())
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js/'));
});

gulp.task('watch', function () {
  gulp.watch('./assets/sass/**/*.scss', ['css']);
  gulp.watch('assets/js/*.js', ['javascript']);
  gulp.watch('assets/img/**/*', ['img'])
});