<?php


/////////////////////////////////////////////////////////////////////////////
// 2021-02-27 jj5 - include dependencies...
//

require_once __DIR__ . '/../120-debug/mud_debug.php';


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2022-02-23 jj5 - include components...
//

require_once __DIR__ . '/class/MudModuleIo.php';


/////////////////////////////////////////////////////////////////////////////
// 2021-02-24 JJ5 - service locator...
//
//

function mud_module_io() : MudModuleIo {

  return mud_locator()->get_module( MudModuleIo::class );

}


/////////////////////////////////////////////////////////////////////////////
// 2024-08-07 jj5 - functional interface...
//
//

if ( defined( 'APP_FAST_IO' ) && APP_FAST_IO ) {

  require_once __DIR__ . '/api/fast-io.php';

}
else {

  require_once __DIR__ . '/api/slow-io.php';

}
