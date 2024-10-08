<?php

abstract class MudHost extends MudNullable implements IMudHost {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - traits...
  //

  use MudHostMixin;


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - private fields...
  //

  private array $child_list = [];


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - public instance methods...
  //

  public function get_child_list() : array { return []; }

}
