/* init gulp plugins */ 
var     gulp        =   require('gulp'),
        gutil       =   require('gulp-util'),
        imageop     =   require('gulp-image-optimization'),
        gulpif      =   require('gulp-if');
        livereload  =   require('gulp-livereload');

var     devStatus   =   true;

// load plugins
var     $           =   require('gulp-load-plugins')(),

        sorc        =   'assets',
        sorcSass    =   [sorc + '/sass/*.scss'],
        sorcImg     =   'assets/img/**/*.{gif,jpg,png,svg}',
    
        destImg     =    'img',
        destSass    =    'css';

if  (devStatus === true) {
        sassStyle   =   'compact',
        imgOptLev   =   1
    }
else {
        sassStyle   =   'compressed',
        imgOptLev   =   5 
    };

gulp.task('style', function() { 
    return gulp.src(sorcSass)
        .pipe($.rubySass({
            debugInfo: true,
            style: sassStyle  
        }))
/*        .pipe($.autoprefixer('last 4 version', '> 5%', 'ie 8', {map: false})) */
        .pipe(gulp.dest(destSass))
        .pipe(livereload())
        .pipe($.size());
});


gulp.task('images', function(cb) {
    gulp.src(sorcImg)
    .pipe($.cache(
        imageop({
            optimizationLevel: imgOptLev,
            progressive: true,
            interlaced: true
        })
    ))
    .pipe(gulp.dest(destImg))
    .pipe(livereload())
    .on('end', cb)
    .on('error', cb)
    .pipe($.size());
});


gulp.task('watch', function () {
    livereload.listen();
    gulp.watch(sorcSass, ['style']);
    gulp.watch(sorcImg, ['images']);
});

gulp.task('build', function () {
    gulp.start('style');
    gulp.start('images');
});