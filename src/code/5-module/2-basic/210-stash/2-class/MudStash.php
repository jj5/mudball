<?php

class MudStash extends MudGadget {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - private fields...
  //

  private string $name;

  private string $dir_path;

  private string $file_path;

  private mixed $data;


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - constructor...
  //

  public function __construct( string $name ) {

    $this->name = $name;

    $this->dir_path = '/var/state/' . APP_CODE;

    $this->file_path = $this->dir_path . '/' . $name . '.json';

    $this->read_data();

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - public instance methods...
  //

  public function get_name() : string { return $this->name; }

  public function get_dir_path() : string { return $this->dir_path; }

  public function get_file_path() : string { return $this->file_path; }

  public function get_data() : mixed { return $this->data; }

  public function read_data() : void {

    if ( file_exists( $this->file_path ) ) {

      $json = file_get_contents( $this->file_path );

      $this->data = json_decode( $json, true );

    }
    else {

      $this->data = null;

    }
  }

  public function set_data( mixed $data ) : bool {

    static $flags = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

    $json = json_encode( $data, $flags );

    if ( is_string( $json ) && ! json_last_error() ) {

      if ( ! is_dir( $this->dir_path ) ) {

        if ( ! mkdir( $this->dir_path, 0755, true ) ) {

          mud_fail( 'Failed to create directory: ' . $this->dir_path );

        }

      }

      file_put_contents( $this->file_path, $json );

      return true;

    }

    return false;

  }
}
