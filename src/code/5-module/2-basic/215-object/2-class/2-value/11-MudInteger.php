<?php

class MudInteger extends MudNumber implements IMudInteger {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - private fields...
  //

  private int $value;


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - constructor...
  //

  public function __construct( int $value ) {

    $this->value = $value;

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - Stringable interface...
  //

  public function __toString() : string { return $this->to_string(); }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - IMudNullable interface...
  //

  public function is_null() : bool { return false; }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - IMudValue interface...
  //

  public function is_valid( mixed $options = null ) : bool {

    return $this->value >= $this->get_value_min() && $this->value <= $this->get_value_max();

  }

  public function is_empty() : bool { return false; }

  public function is_zero() : bool { return $this->value === 0; }

  public function is_integer( int $n ) : bool { return $this->value === $n; }

  public function is_nan() : bool { return false; }

  public function to_bool() : bool { return boolval( $this->value ); }

  public function to_int() : int { return intval( $this->value ); }

  public function to_float() : float { return floatval( $this->value ); }

  public function to_string() : string { return strval( $this->value ); }

  public function get_value() : mixed { return $this->value; }

  public function get_db_value() : int|float|string|null { return $this->value; }

  public function format( mixed $spec = null ) : string {

    $spec = $this->get_format( $spec );

    $decimals = intval( $spec ?? 0 );

    return number_format( $this->value, $decimals, '.', ',' );

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - IMudNumber interface...
  //


  public function get_number() : float|int { return $this->value; }

  public function get_value_min() : int|float { return PHP_INT_MIN; }

  public function get_value_max() : int|float { return PHP_INT_MAX; }

}
