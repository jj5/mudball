<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2022-04-10 jj5 - class definition...
//

class MudModuleAction extends MudModuleApp {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2022-04-10 jj5 - public methods...
  //

  public function get_action_category( $action ) {

    return explode( '.', $action, 2 )[ 0 ];

  }
}
