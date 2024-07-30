<?php

class MudModuleViewstate extends MudModuleWeb {


  ////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - constructor...
  //

  public function __construct( MudModuleViewstate|null $previous = null) {

    parent::__construct( $previous );

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-02-08 jj5 - factory methods...
  //

  public function new_mud_view_state( array $state = [] ) {

    return new MudViewState( $state );

  }
}