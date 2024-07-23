<?php

interface IMudBoolean extends IMudInteger {

  public function is_true() : bool;

  public function is_false() : bool;

}
