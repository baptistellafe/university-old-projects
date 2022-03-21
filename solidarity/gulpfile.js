// CHAMANDO O GULP.
const gulp = require('gulp'),

// INCLUINDO OS PLUGIN/MÓDULOS/DEPENDÊNCIAS.
imagemin = require('gulp-imagemin'),
plumber = require('gulp-plumber'),
sass = require('gulp-sass'),
concat = require('gulp-concat'),
uglify = require('gulp-uglify'),
minifycss = require('gulp-clean-css'),
connect = require('gulp-connect'),
livereload = require('gulp-livereload'),
watch = require('gulp-watch')

// VARIAVEIS
var cssFiles = [
    './src/scss/*.scss',
    './src/scss/**/*.scss',
    './src/components/**/*.scss'
]

var jsFiles = [
    './src/js/*.js',
    './src/js/**/*.js'
]

var phpFiles = [
    './*.php',
    './src/components/*.php',
    './src/components/**/*.php'
]

var imgFiles = [
    './src/img/*',
    './src/img/**/*'
]

// EXECUTANDO AS TAREFAS.
gulp.task('images', function() {
    // MIFIFICANDO AS IMAGENS
    return gulp.src(imgFiles)
        .pipe(imagemin({ progressive: true, optimizationLevel: 7 }))
        .pipe(gulp.dest('./dist/img'))
        .pipe(connect.reload());
});

gulp.task('style', function(){
    // BUSCA OS ARQUIVOS SCSS, TRANSFORMA EM CSS, CONCATENA, MINIFICA E JOGA NA DIST.
    return gulp.src(cssFiles)
        .pipe(plumber())
        .pipe(sass())
        .pipe(concat('bundle.min.css'))
        .pipe(minifycss('bundle.min.css'))
        .pipe(gulp.dest('./dist/css'))
        .pipe(connect.reload());
});

gulp.task('scripts', function(){
    // BUSCA OS ARQUIVOS JS, CONCATENA, MINIFICA E JOGA NA DIST.
    gulp.src(jsFiles)
        .pipe(plumber())
        .pipe(concat('bundle.min.js'))
        .pipe(uglify('bundle.min.js'))
        .pipe(gulp.dest('./dist/js'))
        .pipe(connect.reload());
});

gulp.task('php', function () {
    // BUSCA OS ARQUIVOS PHP, ATUALIZA E JOGA NA DIST.
    gulp.src(phpFiles)
    .pipe(connect.reload())
    gulp.dest('./');
});

gulp.task('watch', function(){
    // ACOMPANHA AS ALTERAÇÕES NAS PASTAS.
    gulp.watch(cssFiles,['style'])
    gulp.watch(jsFiles,['scripts'])
    gulp.watch(phpFiles,['php'])
    gulp.watch(imgFiles,['images']);
});

gulp.task( 'connect', function() {
  connect.server({ root:phpFiles, livereload: true })
});

gulp.task('default',['connect','images','style','scripts','watch','php']); // TAREFA PADRÃO, EXECUTA TODOS AS TAREFAS.
