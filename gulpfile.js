var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');
var uglify = require('gulp-uglify');
var merge = require('merge-stream');
var reload = browserSync.reload;

/* path to wp custom theme */
var path = 'sneaky/wp-content/themes/fokus-indosiar';

/* ========================================================
 * Tasks with Browser Sync
 * ======================================================== */
gulp.task('browserSync', function() {

    var files = [
        path + '/*.css',
        path + '/*.php',
        path + '/inc/*.php',
        path + '/js/*.js',
        path + '/layouts/*.css',
        path + '/sass/*.scss',
        path + '/sass/**/*.scss',
        path + '/template-parts/*.php',
    ];

    browserSync.init(files, {
        proxy: "http://localhost/fokus.indosiar.com/",
        notify: 'false'
    });
});

gulp.task('sass', function() {
    return gulp.src(path + '/sass/style.scss')
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path)) 
        .pipe(reload({ stream: true }));
});

gulp.task('js', function() {
    return gulp.src([
            './node_modules/jquery/dist/jquery.js',
            // './node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
            './node_modules/fastclick/lib/fastclick.js',
            './node_modules/slick-carousel/slick/slick.js',
            './node_modules/jquery-match-height/dist/jquery.matchHeight.js',
            path + '/js/module/*.js',
            path + '/js/fokus-indosiar.js',
        ])
        .pipe(concat('fokus-indosiar.js'))
        .pipe(gulp.dest(path))
        .pipe(uglify())
        .pipe(concat('fokus-indosiar.min.js'))
        .pipe(gulp.dest(path))
        .pipe(reload({ stream: true }));
});

// Create a list utility task and merge them
gulp.task('utility', function(){

    // move slick fonts to the fonts under custom themes folder
    var slick_fonts = gulp.src('node_modules/slick-carousel/slick/fonts/*')
        .pipe(gulp.dest( path + '/fonts'));

    // move ajax loader to custom themes folder
    var ajax_loader = gulp.src('node_modules/slick-carousel/slick/ajax-loader.gif')
        .pipe(gulp.dest(path));

    // move slick fonts to the sass folder under custom themes folder
    var kodein_sass = gulp.src('lib/sass/kodein/**/*')
        .pipe(gulp.dest(path + '/sass'));

    // move font_awesome fonts to themes root folder
    var font_awesome = gulp.src('node_modules/font-awesome/fonts/**/*')
        .pipe(gulp.dest('sneaky/wp-content/themes/fonts/'))

    var bootstrap_font = gulp.src('node_modules/bootstrap-sass/assets/fonts/bootstrap/*')
        .pipe(gulp.dest('sneaky/wp-content/themes/fonts/'))

    return merge(slick_fonts, ajax_loader, kodein_sass, font_awesome, bootstrap_font);
})

// Copy env.php from wp-content to the themes folder
gulp.task('env', function(){
    return gulp.src('sneaky/env.php')
    .pipe(gulp.dest(path))
});

gulp.task('default', ['sass', 'js', 'browserSync'], function() {
    gulp.watch('*.scss', {cwd: path + '/sass'}, ['sass']);
    gulp.watch('**/*.scss', {cwd: path + '/sass'}, ['sass']);
    gulp.watch('*.js', {cwd: path + '/js'}, ['js']);
    gulp.watch('**/*.js', {cwd: path + '/js'}, ['js']);
});
