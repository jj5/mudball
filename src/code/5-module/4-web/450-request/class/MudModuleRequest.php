<?php

class MudModuleRequest extends MudModuleWeb {


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - constructor...
  //

  public function __construct( MudModuleRequest|null $previous = null) {

    parent::__construct( $previous );

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-02-08 jj5 - factory methods...
  //

  public function new_mud_request_reader() {

    return new MudRequestReader();

  }

  public function new_mud_request(
    string $verb,
    array $headers,
    ?string $http_user_agent,
    ?string $http_accept,
    ?string $http_accept_language,
    ?string $http_accept_encoding,
    ?string $http_if_modified_since,
    ?string $http_if_none_match,
    string $scheme,
    string $host,
    int $port,
    string $controller_path,
    array $request_path_parts,
    ?array $selector,
    array $criteria,
    array $submission,
    array $files,
    array $cookies,
    array $state,
    $facility,
  ) {

    return new MudRequest(
      $verb,
      $headers,
      $http_user_agent,
      $http_accept,
      $http_accept_language,
      $http_accept_encoding,
      $http_if_modified_since,
      $http_if_none_match,
      $scheme,
      $host,
      $port,
      $controller_path,
      $request_path_parts,
      $selector,
      $criteria,
      $submission,
      $files,
      $cookies,
      $state,
      $facility,
    );

  }
}
