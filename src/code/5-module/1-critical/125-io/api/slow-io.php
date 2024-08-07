<?php


/////////////////////////////////////////////////////////////////////////////
// 2021-02-24 jj5 - functional interface...
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

function mud_print( string $line, &$bytes_written = null ) : void {

  mud_module_io()->printline( $line, $bytes_written );

}

function mud_write( string $output, &$bytes_written = null ) : void {

  mud_module_io()->stdout( $output, $flush = false, $bytes_written );

}

function mud_flush( string $output, &$bytes_written = null ) : void {

  mud_module_io()->stdout( $output, $flush = true, $bytes_written );

}

function mud_stdout( string $output, bool $flush = false, &$bytes_written = null ) : void {

  mud_module_io()->stdout( $output, $flush, $bytes_written );

}

function mud_stderr( string $output, bool $flush = false, &$bytes_written = null ) : void {

  mud_module_io()->stderr( $output, $flush, $bytes_written );

}
