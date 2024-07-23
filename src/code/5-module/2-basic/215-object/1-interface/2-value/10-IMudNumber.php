<?php

interface IMudNumber extends IMudAtom {

  public function get_number() : int|float;

  public function get_value_min() : int|float;

  public function get_value_max() : int|float;

}
