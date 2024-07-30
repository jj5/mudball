<?php

class MudThing extends MudNode implements IMudThing {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - constructor...
  //

  public function __construct( array $child_list = [] ) {

    parent::__construct();

    $this->set_child_list( $child_list );

  }
}
