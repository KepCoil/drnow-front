var 
	gulp           = require('gulp'),
	sass           = require('gulp-sass'),
	browserSync    = require('browser-sync'),
	concat         = require('gulp-concat'),
	uglify         = require('gulp-uglify'),
	cleanCSS       = require('gulp-clean-css'),
	rename         = require('gulp-rename'),
	del            = require('del'),
	autoprefixer   = require('gulp-autoprefixer'),
	notify         = require("gulp-notify");



gulp.task('browser-sync', function() {
	browserSync({
		notify: false,
		open: false,
		browser: 'firefox',
		port: '3030',

		// server: {baseDir: 'app'},
		// proxy: 'drnow.front', //window openserver local server
		proxy: 'drnow.front', //lampp local server
		
	});
});


gulp.task('sass', function() {
	return gulp.src('app/sass/**/*.sass')
	.pipe(sass({outputStyle: 'expand'}).on("error", notify.onError()))
	.pipe(rename({suffix: '.concat', prefix : ''}))
	.pipe(autoprefixer(['last 15 versions']))
	// .pipe(cleanCSS()) // Опционально, закомментировать при отладке
	.pipe(gulp.dest('app/css'))
	.pipe(browserSync.reload({stream: true}));
});


gulp.task('common-js', function() {
	return gulp.src([
		'app/js/**/*.js'
		])
	// .pipe(uglify()) // Минимизация JS
	.pipe(gulp.dest('app/js'))
	.pipe(browserSync.reload({stream: true}));
});



gulp.task('watch', ['sass', 'common-js', 'browser-sync'], function() {
	gulp.watch('app/sass/**/*.sass', ['sass']);
	gulp.watch('app/js/**/*.js', ['common-js']);
	gulp.watch('app/**/*.html', browserSync.reload);
	gulp.watch('app/**/*.php', browserSync.reload);
});


gulp.task('default', ['watch']);