// Requis
var gulp = require( 'gulp' );

// Include plugins
var plugins = require( 'gulp-load-plugins' )();

// Variables de chemins
var source = '.'; // dossier de travail
var destination = '.'; // dossier à livrer

// Tâches
// Tâche "sass" = compilation des fichiers scss en css, indentations et préfixes auto
gulp.task('sass', function () {
  return gulp.src( source + "/scss/style.scss" )
    /* ici les plugins Gulp à exécuter */
    .pipe( plugins.sass() )
    .pipe( plugins.cssbeautify( {indent: '    '} ) )
    .pipe( plugins.autoprefixer() )
    .pipe(gulp.dest( destination ));
});

// Tâche "watch" = auto-update
gulp.task( 'watch', function () {
  gulp.watch( source + '/scss/*.scss', [ 'sass' ] );
});

// Tâche "build"
gulp.task( 'build', [ 'sass' ] );

// Tâche par défaut
gulp.task( 'default', [ 'build' ] );
