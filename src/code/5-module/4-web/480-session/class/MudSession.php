<?php

class MudSession extends MudService {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-02-09 jj5 - constructor...
  //

  public function __construct( MudSession|null $previous = null ) {

    parent::__construct( $previous );

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2022-04-10 jj5 - public methods...
  //

  public function flash( $message ) { ; }

}
