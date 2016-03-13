'use strict';

var gulp = require( "gulp" );
var qunit = require( "gulp-qunit" );

gulp.task('test', function() {
    return gulp.src( './tests/tests.html' )
        .pipe( qunit() );
});

gulp.task( 'default', [], function () {
  return gulp.src( [ './node_modules/JQuery-Snowfall/src/snowfall.jquery.js' ] )
    .pipe( gulp.dest( 'js' ) );
} );
