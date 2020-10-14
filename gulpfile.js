var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var plumber = require('gulp-plumber');
var postCss = require('gulp-postcss');
var wait = require('gulp-wait');
var pug = require('gulp-pug');
var babel = require('gulp-babel');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var gulpIf = require('gulp-if');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var mozjpeg = require('imagemin-mozjpeg');
var lec = require('gulp-line-ending-corrector');
var color = require('ansi-colors');
var autoprefixer = require('autoprefixer');
var browserSync = require('browser-sync');
var rimraf = require('rimraf');

var conf = {
  root: {
    src: 'src/',
    dist: '_dev/'
  },
  src: {
    html: 'pug/',
    styles: 'scss/',
    scripts: 'js/',
    images: 'img/'
  },
  dist: {
    html: '',
    styles: 'assets/css/',
    scripts: 'assets/js/',
    images: 'assets/img/'
  },
  format: {
    encode: 'utf8',
    eol: 'CRLF'
  },
  option: {
    cssMin: false,
    cssSourcemaps: true,
    useBabel: false,
    jsMin: false,
    imageMin: false
  },
};

var postCssPlugin = [
  autoprefixer({
    cascade: false,
  })
];

var errorLog = function (errorMsg) {
  console.log(color.red('Error: ' + errorMsg));
};

gulp.task('config:dev', function (done) {
  Object.assign(conf, {
    root: {
      ...conf.root,
      src: 'src/',
      dist: '_dev/'
    }
  });

  done();
});

gulp.task('config:build', function (done) {
  Object.assign(conf, {
    root: {
      ...conf.root,
      src: 'src/',
      dist: 'build/'
    },
    option: {
      cssMin: true,
      cssSourcemaps: false,
      useBabel: false,
      jsMin: false,
      imageMin: true
    }
  });

  done();
});

gulp.task('pug', function () {
  return gulp.src(conf.root.src + conf.src.html + 'pages/**/!(_)*.pug')
    .pipe(plumber({
      errorHandler: function(error) {
        errorLog(error.message);
        this.emit('end');
      }
    }))
    .pipe(pug({
      pretty: true,
      basedir: conf.root.src
    }))
    .pipe(lec({
      encoding: conf.format.encode,
      eolc: conf.format.eol
    }))
    .pipe(gulp.dest(conf.root.dist + conf.dist.html));
});

gulp.task('styles', function () {
  return gulp.src(conf.root.src + conf.src.styles + '**/!(_)*.scss')
    .pipe(sassGlob())
    .pipe(gulpIf(conf.option.cssSourcemaps, sourcemaps.init()))
    .pipe(plumber({
      errorHandler: function(error) {
        errorLog(error.message);
        this.emit('end');
      }
    }))
    .pipe(wait(200))
    .pipe(sass({
      outputStyle: conf.option.cssMin ? 'compressed' : 'expanded'
    }))
    .pipe(postCss(postCssPlugin))
    .pipe(gulpIf(conf.option.cssSourcemaps, sourcemaps.write('.')))
    .pipe(lec({
      encoding: conf.format.encode,
      eolc: conf.format.eol
    }))
    .pipe(gulp.dest(conf.root.dist + conf.dist.styles))
    .pipe(browserSync.stream());
});

gulp.task('scripts:libs', function () {
  return gulp.src(conf.root.src + conf.src.scripts + 'libs/**/*.js')
    .pipe(gulp.dest(conf.root.dist + conf.dist.scripts + 'libs/'));
});

gulp.task('scripts:main', function () {
  return gulp.src([conf.root.src + conf.src.scripts + '**/*.js', '!' + conf.root.src + conf.src.scripts + 'libs/**/*'])
    .pipe(plumber({
      errorHandler: function(error) {
        errorLog(error.message);
        this.emit('end');
      }
    }))
    .pipe(gulpIf(conf.option.useBabel, babel({
      presets: ['@babel/preset-env']
    })))
    .pipe(gulpIf(conf.option.jsMin, uglify()))
    .pipe(lec({
      encoding: conf.format.encode,
      eolc: conf.format.eol
    }))
    .pipe(gulp.dest(conf.root.dist + conf.dist.scripts));
});

gulp.task('images', function () {
  return gulp.src(conf.root.src + conf.src.images + '**/*.+(jpg|png|gif|svg)')
    .pipe(gulpIf(conf.option.imageMin,
      imagemin([
        pngquant({
          speed: 1,
          dithering: 0
        }),
        mozjpeg({
          quality: 80,
          progressive: true
        }),
        imagemin.gifsicle(),
      ], {
        verbose: true
      })))
    .pipe(gulp.dest(conf.root.dist + conf.dist.images));
});

gulp.task('server', function (done) {
  browserSync({
    server: conf.root.dist,
    port: 3000,
    directory: true,
    watchOptions: {
      ignoreInitial: true,
      ignored: ['node_modules']
    }
  });

  done();
});

gulp.task('clean', function (done) {
  rimraf(conf.root.dist, done);
});

gulp.task('copy-webfonts', function() {
  return gulp.src(conf.root.src + conf.src.styles + 'libs/font-awesome/webfonts/*')
    .pipe(gulp.dest(conf.root.dist + conf.dist.styles + 'libs/font-awesome/webfonts'));
});

gulp.task('watch', function () {
  gulp.watch(conf.root.src + conf.src.html + '**/*.pug', gulp.parallel('pug'));
  gulp.watch(conf.root.src + conf.src.styles + '**/*.scss', gulp.parallel('styles'));
  gulp.watch([conf.root.src + conf.src.scripts + '**/*.js', '!' + conf.root.src + conf.src.scripts + 'libs/*.js'], gulp.parallel('scripts:main'));
  gulp.watch(conf.root.src + conf.src.scripts + 'libs/*.js', gulp.parallel('scripts:libs'));
  gulp.watch(conf.root.src + conf.src.images + '**/*.+(jpg|png|gif|svg)', gulp.parallel('images'));
  gulp.watch(conf.root.dist + '**/*.html').on('change', browserSync.reload);
});

gulp.task('compile', gulp.parallel(
  'pug',
  'styles',
  'scripts:main',
  'scripts:libs',
  'images'
));

gulp.task('build', gulp.series(
  'config:build',
  'clean',
  'copy-webfonts',
  'compile'
));

gulp.task('dev', gulp.series(
  'config:dev',
  'clean',
  'copy-webfonts',
  'compile',
  'server',
  'watch'
));
