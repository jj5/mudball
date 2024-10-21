<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2021-03-19 jj5 - class definition...
//

class MudModulePclogDispatcher extends MudGadget {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-03-04 jj5 - constructur...
  //

  public function __construct() {

    parent::__construct();

    set_error_handler( [ $this, 'handle_error' ], ~0 );

    set_exception_handler( [ $this, 'handle_exception' ] );

    // 2024-02-07 jj5 - we leave this as the default behaviour, which is to throw an exception...
    /*
    assert_options( ASSERT_ACTIVE, 1 );
    assert_options( ASSERT_WARNING, 0 );

    // 2022-11-09 jj5 - OLD: this is no longer supported...
    //assert_options( ASSERT_QUIET_EVAL, 1 );

    assert_options( ASSERT_CALLBACK, [ $this, 'handle_assertion_violation' ] );
    */

    if ( mud_is_web() ) {

      // 2019-11-10 jj5 - we only handle shutdown for web apps, so we can
      // check for 4xx or 5xx errors generated by the application...
      //
      register_shutdown_function( [ $this, 'handle_shutdown' ] );

    }
  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-02-24 jj5 - public static functions...
  //

  public static function Attach() {

    return MudModulePclogDispatcher::Create();

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-02-24 jj5 - public functions...
  //

  public function handle_error(
    $number,
    $message,
    $file,
    $line,
    $context = null
  ) {

    return mud_module_pclog()->handle_error( $number, $message, $file, $line, $context );

  }

  public function handle_exception( $ex ) {

    return mud_module_pclog()->handle_exception( $ex );

  }

  public function handle_assertion_violation(
    $file,
    $line,
    $assertion,
    $description = null
  ) {

    return mud_module_pclog()->handle_assertion_violation( $file, $line, $assertion, $description );

  }

  public function handle_shutdown() {

    return mud_module_pclog()->handle_shutdown();

  }
}
