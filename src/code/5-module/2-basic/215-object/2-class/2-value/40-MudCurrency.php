<?php

define( 'APP_STASH_CURRENCY', 'currency' );

define(
  'MUD_CURRENCY_COUNTRY_MAP',
  [
    'AU' => 'AUD',
    'US' => 'USD',
  ]
);


abstract class MudCurrency extends MudString implements IMudCurrency {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - public instance methods...
  //

  public function get_canonical_currency( $currency ) {

    $result = MUD_CURRENCY_COUNTRY_MAP[ $currency ] ?? $currency;

    assert( strlen( $result ) === 3 );

    return $result;

  }

  public function get_default_currency() : IMudCurrency {

    static $currency = null;

    if ( $currency === null ) {

      $currency = mud_get_currency( $_GET[ 'currency' ] ?? MUD_VALUE_DEFAULT_CURRENCY );

    }

    return $currency;

  }

  public function get_currency_rates() : array {

    $currency = $this->get_currency_code();

    $key = "currency-$currency";

    $today = date( 'Y-m-d' );

    $stash = mud_get_stash( APP_STASH_CURRENCY );

    $data = $stash->get_data();

    $rates = $data[ $key ][ $today ] ?? null;

    if ( $rates ) { return $rates; }

    $url = "https://api.exchangerate-api.com/v4/latest/$currency";

    $json = file_get_contents( $url );

    $rates = json_decode( $json, true );

    $data[ $key ][ $today ] = $rates;

    $stash->set_data( $data );

    return $rates;

  }
}
