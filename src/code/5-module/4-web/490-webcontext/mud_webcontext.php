<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2022-04-08 jj5 - include dependencies...
//

require_once __DIR__ . '/../480-session/mud_session.php';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2022-04-08 jj5 - module errors...
//



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2022-04-08 jj5 - include components...
//

require_once __DIR__ . '/1-interface/IMudWebContext.php';
require_once __DIR__ . '/2-class/MudWebContext.php';
require_once __DIR__ . '/2-class/MudModuleWebcontext.php';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-02-08 jj5 - factory methods...
//

function new_mud_web_context( $request, $response, $view_state ) {

  return mud_module_webcontext()->new_mud_web_context( $request, $response, $view_state );

}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-02-08 jj5 - service locator...
//

function mud_module_webcontext() : MudModuleWebcontext {

  return mud_locator()->get_module( MudModuleWebcontext::class );

}