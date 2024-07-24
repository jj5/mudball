<?php

abstract class MudGadget implements JsonSerializable {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-02-08 jj5 - include the mixin...
  //

  use MudMixin;


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-02-08 jj5 - constructor...
  //

  public function __construct() {

    // 2024-07-23 jj5 - NOTE: object IDs are out until we have a specific use case for them.
    //$this->set_oid( self::new_oid() );

    $this->count_increment();

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-24 jj5 - destructor...
  //

  public function __destruct() {

    // 2024-07-24 jj5 - TODO: this function definition seems to be necessary, but I am not sure why. Should look into that...

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-02-07 jj5 - process tracing...
  //

  protected function trace_init( string $message, mixed $context = null ) : int { return 0; }

  protected function trace_done( string $message, mixed $context = null ) : int { return 0; }

  protected function trace( string $message, mixed $context = null ) : void { ; }

}
