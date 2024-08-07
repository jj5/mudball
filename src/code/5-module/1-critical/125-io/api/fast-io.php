<?php

// 2024-08-07 jj5 - in this file performance critical functions are implemented directly rather than through the
// MudModuleIo class... the implications of this are that the functions are not as easily mocked for testing, but
// they are faster to execute. Note too that some of the output functions defined in this file omit some of the
// bookkeeping that is done in the MudModuleIo class, such as tracking the number of bytes flushed or cleared.

// 2024-08-07 jj5 - NOTE: buffer management probably isn't ever going to be performance critical, so it's probably
// not worth implementing these functions directly. The input functions might be reviewed in future, but usually output
// is the main game for perf so that's what I have implemented now.

/////////////////////////////////////////////////////////////////////////////
// 2024-08-07 jj5 - functional interface...
//
//

function mud_buffer_reset() : int {

  return mud_module_io()->reset();

}

function mud_buffer_start() : int {

  return mud_module_io()->start();

}

function mud_buffer_flush( &$length = null, bool $return = false ) {

  return mud_module_io()->flush( $length, $return );

}

function mud_buffer_clear( &$length = null, bool $return = false ) {

  return mud_module_io()->clear( $length, $return );

}

function mud_buffer_clear_all( &$length = null, bool $return = false ) {

  return mud_module_io()->clear_all( $length, $return );

}

function mud_read_acord( $input ) {

  return mud_module_io()->read_acord( $input );

}

function mud_read_ucord( $input ) {

  return mud_module_io()->read_ucord( $input );

}

function mud_read_atext( $input ) {

  return mud_module_io()->read_atext( $input );

}

function mud_read_utext( $input ) {

  return mud_module_io()->read_utext( $input );

}


function mud_print( string $line ) : void {

  echo $line;
  echo "\n";

}

function mud_write( string $output ) : void {

  echo $output;

}

function mud_flush( string $output ) : void {

  echo $output;

  flush();

}

function mud_stdout( string $output, bool $flush = false ) : void {

  echo $output;

  if ( $flush ) { flush(); }

}

if ( defined( 'STDERR' ) ) {

  function mud_stderr( string $output, bool $flush = false ) : void {

    fwrite( STDERR, $output );

    if ( $flush ) { fflush( STDERR ); }

  }
}
else {

  function mud_stderr( string $output, bool $flush = false ) : void {

    error_log( $output );

  }
}
