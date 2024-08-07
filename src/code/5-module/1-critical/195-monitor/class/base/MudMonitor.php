<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2021-06-17 jj5 - class definition...
//

abstract class MudMonitor extends MudGadget {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-06-17 jj5 - protected fields...
  //

  protected $monitor_object;

  protected $monitor_log = [];


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-06-17 jj5 - constructor...
  //

  public function __construct( $monitor_object ) {

    parent::__construct();

    $this->monitor_object = $monitor_object;

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-06-17 jj5 - public methods...
  //

  public function get_monitor_log() { return $this->monitor_log; }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-06-17 jj5 - protected methods...
  //

  protected function log_monitor( $func, $name = null ) {

    $this->monitor_log[] = [ 'time' => microtime( true ), 'func' => $func, 'name' => $name ];

  }
}
