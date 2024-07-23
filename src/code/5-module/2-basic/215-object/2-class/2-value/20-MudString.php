<?php


define( 'MUD_STRING_HASH_FUNCTION', 'sha512/224' );


class MudString extends MudAtom implements IMudString {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - private fields...
  //

  private string $value;


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - constructor...
  //

  public function __construct( string $value ) {

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

    if ( strlen( $this->value ) < $this->get_length_min() ) { return false; }

    if ( strlen( $this->value ) > $this->get_length_max() ) { return false; }

    foreach ( $this->get_regex_valid() as $regex ) {

      if ( ! preg_match( $regex, $this->value ) ) { return false; }

    }

    foreach ( $this->get_regex_invalid() as $regex ) {

      if ( preg_match( $regex, $this->value ) ) { return false; }

    }

    return true;

  }

  public function is_empty() : bool { return strlen( $this->value ) === 0; }

  public function is_zero() : bool { return $this->to_int() === 0; }

  public function is_integer( int $n ) : bool { return $this->to_int() === $n; }

  public function is_nan() : bool { return ! is_numeric( $this->value ); }

  public function to_bool() : bool { return boolval( $this->value ); }

  public function to_int() : int { return intval( $this->value ); }

  public function to_float() : float { return floatval( $this->value ); }

  public function to_string() : string { return $this->value; }

  public function get_value() : mixed { return $this->value; }

  public function get_db_value() : int|float|string|null { return $this->value; }

  public function format( mixed $spec = null ) : string { return $this->value; }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - IMudString interface...
  //

  public function get_hash() : string { return self::hash( $this->to_string() ); }

  public function get_length_min() : int { return 0; }

  public function get_length_max() : int { return PHP_INT_MAX; }

  public function get_regex_valid() : array { return []; }

  public function get_regex_invalid() : array { return []; }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - public staic methods...
  //

  public static function hash( $string ) { return hash( MUD_STRING_HASH_FUNCTION, $string ); }

}
